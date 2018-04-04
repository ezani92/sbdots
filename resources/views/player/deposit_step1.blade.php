@include('player.header')
<div class="content">
    <div class="container">
        <div class="page-content">
            <div class="m-page clearfix">
                <ul class="member">
                    <li><a href="{{ url('player') }}" class="">main</a></li>
                    <li><a href="{{ url('player/deposit/step1') }}" class="active">deposit</a></li>
                    <li><a href="{{ url('player/withdrawal/step1') }}" class="">withdrawal</a></li>
                    <li><a href="{{ url('player/transfer/step1') }}" class="">transfer</a></li>
                    <li><a href="{{ url('player/transaction') }}" class="">transaction</a></li>
                    <li><a href="{{ url('player/profile') }}" class="">profile</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active">
                        <div class="title-wrap">
                            <div class="outer-mask">
                                <div class="inner-mask">
                                    <div class="title-p">
                                        <h2 class="smaller">Deposit</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <h4>Step 1 : Please Select Game To Deposit.</h4>
                        
                        <div class="member-main">
                            <form method="get" action="{{ url('player/deposit/step2') }}">
                                @csrf
                                <div class="deposit-form clearfix">

                                    <select class="game-select" name="games">
                                        @foreach($game_cat as $cat)

                                        <optgroup label="{{ $cat }}">

                                            @foreach ($games as $game)
                                            
                                                @if ($game->category == $cat)

                                                    <option value="{{$game->id}}">{{$game->name}}</option>

                                                @endif

                                            @endforeach

                                         </optgroup>

                                        @endforeach
                                    </select>

                                    <!-- <div class="col-md-4 col-xs-4">
                                            <div class="member-col">
                                                <div class="{{-- $game->category --}}"><img src="{{-- secure_asset('images/common/provider/'.$game->logo) --}}"/></div>
                                            </div>
                                            <div class="member-input">
                                                <input value="{{-- $game->id --}}" name="games" type="radio" id="" style="outline: none;" />
                                                <span>{{-- $game->name --}}</span>
                                            </div>
                                        </div> -->

                                </div>
                                <div class="deposit-form clearfix">
                                    <input type="submit" name="" value="NEXT" id="" class="btn btn-warning btn-more pull-right align" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('player.footer')
</body></html>