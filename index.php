<!DOCTYPE html>
<html>
    <head>
        <title>Email sender</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Le styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/style.css" >
        
        <!-- Scripts -->
        
        <script src="/js/jquery-3.1.0.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="/js/validation_script.js"></script>
    </head>
    <body>
        <div class="container top50 col-xs-offset-3">
            <div class="row">
            <div class="col-xs-6 text-center" id="status">
            </div>
            </div>
        <form id="contact_form"  method="POST" >
            <div class="row top17">
            <div class="col-xs-4">
                <input class="form-control" type="text" name="subject" placeholder="Subject"/>
            </div>
            </div>

            <div class="row top17">
                <div class="col-xs-3">
                    <input class="form-control" type="email" name="email" placeholder="Send to " />
                </div>
                <div class="col-xs-3">
                    <input class="form-control" type="text" name="phone" placeholder="Phone:+38-0XX-XXXXXXX"/>
                </div>
            </div>
            <div class="row top17">
            <div class="col-xs-6">
                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
            </div>
        </div>
            <div class="row top17">
            <div class="col-xs-5 col-xs-offset-3">
                <div class="btn btn-primary" id="reset"/>Reset</div>
               <div class="btn btn-success" id="submit" onclick="send()"/>Send</div>
            </div>    
            </div>
        </form>    
        </div>

    </body>
</html>
