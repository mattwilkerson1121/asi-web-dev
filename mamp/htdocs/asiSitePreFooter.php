
<div class="row-fluid home-content-row clearfix home-seo" style="display:none !important;">
        <strong>At Value City Furniture, Style Comes Easy</strong><br>
        Since 1948, Value City Furniture has helped to furnish America&#39;s homes with quality furniture at the guaranteed best prices. Our mission is to make furniture shopping easy. Whether you are furnishing a guest room, a bedroom, a living room or a basement, Value City Furniture has all the home furnishings you need to create the room or home of your dreams. Visit one of our furniture stores today or buy online - it&#39;s up to you. Either way you can browse our amazing selection of furniture complete with sectionals, sofas or couches, beds, dinettes, recliners, TV stands, chairs, chaises, rugs, and so much more.
    </div>

    <div class="clear"></div>
</section> <!-- END : PAGE CONTENT SECTION !-->

<div class="clear"></div>




            </div>
            <div id="overlay-menu-modal"></div>
        </section>

        <div class="clearfix"></div>

        


    <script type="text/javascript">
        $(document).ready(function () {
            $('#footer-locator-search-btn').on('click', function (event) {
                if ($('#zip-search-box').val() === '') {
                    $('#zip-search-box').addClass('invalid');
                    return;
                } else {
                    var zip = $('#zip-search-box').val();
                    document.location = "/store-locator?zip=" + zip;
                }
            });
        });
        function doFooterZipButtonClick(buttonName, e) {
            var key;
            if (window.event)
                key = window.event.keyCode; // IE
            else
                key = e.which; //Firefox
            if (key == 13) {
                var btn = document.getElementById(buttonName);
                if (btn != null) {
                    btn.click();
                    event.keyCode = 0;
                }
            }
        }
    </script>
<div class="footer-wrapper" style="width:100%;padding:0;margin:0;background:#ffffff;">
    <div class="footer-store-locator">
        <div class="footer-store-locator-container">
            <div class="footer-store-locator-content">
                <div class="footer-store-locator-form">
                    <div>
                        <input id="zip-search-box" class="invalid zip-search-field js-zip-search-field" placeholder="Enter Zip Code" onkeypress="doFooterZipButtonClick('footer-locator-search-btn', event)" required="" type="text">
                        <a id="footer-locator-search-btn" class="footer-store-locator-button"><i class="fa fa-search"></i></a>
                    </div>
                    <a href="/store-locator" title="Find Your Local Store">COMPLETE LIST &gt;</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="footer-store-locator">
        <div class="footer-store-locator-container">
            <div class="footer-store-locator-content">
                <div class="footer-store-locator-form">
                    <div>
                        <input id="zip-search-box" class="invalid zip-search-field js-zip-search-field" placeholder="Enter Zip Code" onkeypress="doFooterZipButtonClick('footer-locator-search-btn', event)" required="" type="text">
                        <a id="footer-locator-search-btn" class="footer-store-locator-button"><i class="fa fa-search"></i></a>
                    </div>
                    <a href="/store-locator" title="Find Your Local Store">COMPLETE LIST &gt;</a>
                </div>
            </div>
        </div>
    </div>