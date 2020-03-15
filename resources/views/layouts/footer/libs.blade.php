<script>
function hello(){
    alert('welcome to new project');
}
document.addEventListener('DOMContentLoaded', hello);
</script>
<!--====================
 Scripts
====================-->
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/packery.pkgd.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/my-instagram-gallery.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.inview.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/tweetie.min.js"></script>
<script src="assets/js/jquery.timeago.js"></script>
<script src="assets/js/jquery.knob.min.js"></script>
<script src="assets/js/product-logic.js"></script>
<script src="assets/js/css3-animate-it.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/main.js"></script>

<style>
        .fa {
            padding: 10px;
            font-size: 20px;
            width: 10px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .top-footer {
            position: absolute;
            width: 30%;
            height: 51px;
            background-color: black;
            margin-top: -120px;
            margin-left: 68.5%;
            z-index: 999;
            border-top-left-radius: 70px;
        }

        .box-black {
            position: absolute;
            width: 50px;
            height: 50px;
            z-index: 99;
            border-top-left-radius: 20px;
            left: 424px;
            top: 49px;
            background-color: transparent;
        }

        .box-black::before {
            content: "";
            position: absolute;
            width: 50px;
            height: 50px;
            border-top-left-radius: 25px;
            box-shadow: 0 -15px 0 0 #181818;
        }
</style>

@yield('scripts')
