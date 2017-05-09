<html>
    <head>     
        <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/form.css') }}" rel="stylesheet">
        <script src="css/js/jquery.min.js" type="text/javascript"></script>
        <script src="css/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <body>

        

        

        <div class="module-15">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="map" style="width:100%;height:300px;background:yellow">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d230269.70880005957!2d-74.00135996829798!3d40.68464973889428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2sus!4v1491873240432" width="100%" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> 
                    </div>
                    

                    <div class="col-md-6 aa">
                        <form action="hson/add" method="get" class="form-horizontal">
                            <div class="form-group">
                                <input type="text" name="form_name" id="yourname" placeholder="Your Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="form_email" id="yourname" placeholder="Your Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="form_sb" id="yourname" placeholder="Your Subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control ym" name="form_message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
        <script src="css/js/scripts.js" type="text/javascript"></script>
    </body>
</head>
</html>
