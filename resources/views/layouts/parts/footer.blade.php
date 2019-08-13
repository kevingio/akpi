<footer class="footer">
    <div class="container">
        <div class="row" style="padding-bottom: 30px;">
            <h3 style="text-align: center;margin-bottom: 30px;">External Links</h3>
            <div class="col-md-4 ext-links">
                <a href="http://www.pusatpastoralyogya.com/" target="blank">Pusat Pastoral Yogyakarta</a>
            </div>
            <div class="col-md-4 ext-links">
                <a href="http://www.rs-griyawaluya.com/" target="blank">Rumah Sakit Griya Waluya Ponorogo</a>
            </div>
            <div class="col-md-4 ext-links">
                <a href="http://www.stdiakoneshkbp.org/" target="blank">Sekolah Tinggi Diakones HKBP Balige</a>
            </div>
            <div class="col-md-12 text-center" style="margin-top: 20px;">
                <p>
                    <strong>Online: </strong>
                    {{ $onlineUsers }} {{ $onlineUsers > 1 ? 'users' : 'user' }}
                </p>
                <p>
                    <strong>Total Visit: </strong>
                    {{ number_format($visitors,null,'','.') }} visit
                </p>
            </div>
        </div>
    </div>
    <div id="copyright" style="background-color: #333; color: darkgray; padding: 10px;">
        <div class="container">
            <div class="col-md-6">
                <p class="pull-left">&copy; 2017 Asosiasi Konselor Pastoral Indonesia</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right">Powered by <a href="http://kevingiovanni.com">Kevin Giovanni</a></p>
            </div>
        </div>
    </div>
</footer>
