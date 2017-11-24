<!-- Online -->
<!--Taken from jQuery CDN-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

<!--Your custom script code-->
<script src="js/main.js"></script>
<script src="js/jquery.liMarquee.js"></script>
<!--Taken from Bootstrap CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Offline 
Downloaded from jquery 
<script src="js/jquery-1.12.4.min.js"></script>
Downloaded from get bootstrap
<script src="js/bootstrap.min.js"></script> -->


<!--= bootstrap datepicker =-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<script>
$('.datepicker').datepicker({
    format: 'dd/mm/yyyy'
})
</script>

<script>
    
    
function myFunction() {
    document.getElementById("colorChange-sky").style.color = "#a8e3e1";
    document.getElementById("#colorChange-blue").style.color = "#6f96c8";
    document.getElementById("colorChange-peach").style.color = "#f4c990";
    document.getElementById("colorChange-lightgreen").style.color = "#98d761";
    document.getElementById("colorChange-green").style.color = "#7bc674";
}
    
</script>
<script src="js/wow.js"></script>

<script>
new WOW().init();
</script>

<!--fileupload-->
    <script type="text/javascript">
        function load_image(id, ext) {
            if (validateExtension(ext) == false) {
                alert("Upload only pdf / doc or docx format ");
                document.getElementById("recentphoto").value = "";
                document.getElementById("imagePreview").innerHTML = "";
                //document.getElementById("file").focus();

            }
        }

        function validateExtension(v) {
            var allowedExtensions = new Array("pdf", "doc", "docx");
            for (var ct = 0; ct < allowedExtensions.length; ct++) {
                sample = v.lastIndexOf(allowedExtensions[ct]);
                if (sample != -1) {
                    return true;
                }
            }
            return false;
        }

    </script>
