    <footer id="footer">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                <p>Designed & Developed by <a href="http://www.cerbosys.com/">Cerbosys</a></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="footer-right">
                <a href="https://www.facebook.com/trainers.club.14"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="https://www.linkedin.com/in/trainers-club-4b0956166/"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
            </div>
        </div>
    </footer>
<style>
#toast {
    visibility:hidden;
    max-width: 50px;
    height: 50px;
    margin: auto;
    background-color: #ABABAB;
    color: #000;
    text-align: center;
    border-radius: 2px;
    position: fixed;
    z-index: 100000;
    left: 70%;
    /* right: 10px; */
    top: 10px;
    font-size: 17px;
    white-space: nowrap;
}
#toast #img{
	width: 100px;
	height: 50px;
    
    float: left;
    
    padding-top: 16px;
    padding-bottom: 16px;
    
    box-sizing: border-box;

    
    background-color: #e4e4e4;
    color: #000;
}
#toast #desc{
    width: 300px;
    display: inline-block;
    background-color: orange;
    color: #000;
    padding: 16px;
    height:50px;
    overflow: hidden;
	white-space: nowrap;
}

#toast.show {
    visibility: visible;
}

.footer-left, .footer-right {
    margin-top: 26px;
}


</style>
<div id="toast"><div id="img">Message</div><div id="desc"></div></div>
<script>
    function toast(message) {
        var x = document.getElementById("toast")
        x.className = "show";
        document.getElementById("desc").innerHTML = message;
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    }
</script>