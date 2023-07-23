<!doctype html>


    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>J Locator</title>
    <script>
        function showPosition() {
            if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
                    document.getElementById("result").innerHTML = positionInfo;
                });
            } else {
                alert("Sorry, your browser does not support HTML5 geolocation.");
            }
        }
    </script>
    </head>
    <body>
     Your IP Address is: <? echo $_SERVER["REMOTE_ADDR"]; ?>
        <div id="result">
            <!--Position information will be inserted here-->
        </div>
        <button type="button" onclick="showPosition();">See My Position</button>
    </body>
    <body>


    </body>    </html>
