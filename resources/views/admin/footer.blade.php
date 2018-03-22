<audio id="buzzer" src="{{ secure_asset('storage/sound.ogg') }}" type="audio/ogg"></audio> 
</div>
        <script src="{{ secure_asset('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/js/main.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script src="{{ secure_asset('assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/datatables/plugins/buttons/js/buttons.html5.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/datatables/plugins/buttons/js/buttons.flash.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/datatables/plugins/buttons/js/buttons.print.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/datatables/plugins/buttons/js/buttons.colVis.js') }}" type="text/javascript"></script>
        <script src="{{ secure_asset('assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/wysihtml5x/dist/wysihtml5x-toolbar.min.js"></script>
        <script type="text/javascript" src="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/handlebars/handlebars.runtime.min.js"></script>
        <script type="text/javascript" src="https://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/dist/bootstrap3-wysihtml5.min.js"></script>
        <script type="text/javascript" src="https://cdn.rawgit.com/mouse0270/bootstrap-notify/6a83ec48/bootstrap-notify.js"></script>
        <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
            	//initialize the javascript
            	App.init();
            
            });
        </script>
        <script>
       // Pusher.logToConsole = true;

        var pusher = new Pusher('32a087e0e1378c7b7210', {
            cluster: 'ap1',
            encrypted: true
        });

        var channel = pusher.subscribe('sbdots');

        channel.bind('transaction', function(data) {

            var buzzer = $('#buzzer')[0]; 
            buzzer.play();

            $.notify({
                // options
                icon: 'glyphicon glyphicon-bell',
                title: 'Alert!',
                message: 'You have new pending request transaction!',
                url: '{{ url('/admin') }}',
                target: '_self'
            }, {
                // settings
                type: 'success'
            });
        });
      </script>