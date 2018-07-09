<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Excel;
use Session;
use Carbon\Carbon;
use App\Transaction;
use App\BankRecord;

class BackupController extends Controller
{
    public function index()
    {
    	return view('admin.backup.index');
    }

    public function act(Request $request)
    {
    	$input = $request->all();

    	$admin = User::find(1);  

		if (Hash::check($input['password'], $admin->password))
		{
            if($input['act'] == "Reset")
            {
                $arrStart = explode("-", $input['date_from']);
                $arrEnd = explode("-", $input['date_to']);

                $from = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
                $to = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

                $transactions = Transaction::where('created_at','>=',$from)->where('created_at','<=',$to)->delete();
                $bankrecord = BankRecord::where('created_at','>=',$from)->where('created_at','<=',$to)->delete();

                Session::flash('message', 'File Successfuly Deleted'); 
                Session::flash('alert-class', 'alert-success');


            }
            else if($input['act'] == "Download")
            {
                $arrStart = explode("-", $input['date_from']);
                $arrEnd = explode("-", $input['date_to']);

                $from = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
                $to = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

                $transactions = Transaction::where('created_at','>=',$from)->where('created_at','<=',$to)->get();

                // Initialize the array which will be passed into the Excel
                // generator.
                $orderArray = []; 

                // Define the Excel spreadsheet headers
                $orderArray[] = ['Transaction ID','Fullname','Email','Phone Number','Status','Transaction Type','Deposit Type','Amount','Bonus (if any)','Bank Name','Bank Account Name','Refference No','Remarks','Date & Time'];

                // Convert each member of the returned collection into an array,
                // and append it to the payments array.
                foreach ($transactions as $transaction)
                {

                    $id = "#".sprintf('%06d', $transaction->id);
                    $name = $transaction->user->name;
                    $email = $transaction->user->email;
                    $phone = $transaction->user->phone;

                    if($transaction->status == 2)
                    {
                        $status = 'Accepted';
                    }
                    else if($transaction->status == 3)
                    {
                        $status = 'Declined';
                    }
                    else if($transaction->status == 1)
                    {
                        $status = 'Pending';
                    }

                    $transaction_type = $transaction->transaction_type;
                    $deposit_type = $transaction->deposit_type;
                    $amount = $transaction->amount;
                    $ref_no = $transaction->refference_no;
                    $remarks = $transaction->remarks;
                    $date = $transaction->created_at->format('d M Y , h:i A');

                    if($transaction->bank_id == null)
                    {
                        $bank = "Not Set";
                        $bank_acc_name = "-";
                    }
                    else
                    {
                        $bank = $transaction->bank->name;
                        $bank_acc_name = $transaction->bank->account_name;
                    }

                    if($transaction->bonus_id == null || $transaction->bonus_id == "")
                    {
                        $bonus = "Not Set";
                    }
                    else
                    {
                        $bonus = @$transaction->bonus->name;
                    }

                    //COnvert to excel

                    $tempArray = array($id,$name,$email,$phone,$status,$transaction_type,$deposit_type,$amount,$bonus,$bank,$bank_acc_name,$ref_no,$remarks,$date);          

                    $orderArray[] = $tempArray;

                }

                $excel_name = $input['date_from']." - ".$input['date_to'];
                

                Excel::create($excel_name)
                ->sheet('sheet1', function($sheet) use ($orderArray) {
                        $sheet->fromArray($orderArray, null, 'A1', false, false);
                        $sheet->row(1, function($row) {
                            $row->setBackground('#eeeeee');
                        });
                    })           
                ->export('xls');

                Session::flash('message', 'Excel File Succesfuly Generated'); 
                Session::flash('alert-class', 'alert-danger');
            }

		}
		else
		{
			Session::flash('message', 'Password Incorrect! '); 
            Session::flash('alert-class', 'alert-danger');
		}

        return redirect('admin/backup')->withInput();
    }
}
