<div class="faq-section">
    <div class="single-faq">
        <h3 class="faq-acc-title">Shipping options?</h3>
        <div class="faq-acc-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div class="single-faq">
        <h3 class="faq-acc-title">Do you sell to the public?</h3>
        <div class="faq-acc-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div class="single-faq">
        <h3 class="faq-acc-title">Is everything in stock?</h3>
        <div class="faq-acc-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div class="single-faq">
        <h3 class="faq-acc-title">How much is freight?</h3>
        <div class="faq-acc-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div class="single-faq">
        <h3 class="faq-acc-title">When am I charged?</h3>
        <div class="faq-acc-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div class="single-faq">
        <h3 class="faq-acc-title">What is your returns policy?</h3>
        <div class="faq-acc-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>

<style>

.faq-acc-content {
    display: none;
    background: #fff;
    padding: 25px;
}
.single-faq {
    margin-bottom: 30px;
}
.single-faq h3 {
    color: #fff;
    background: #629731;
    font-size: 30px;
    font-weight: 100;
    padding: 20px;
    cursor: pointer;
    text-align: center;
}
</style>

<script>

        // accordion
        jQuery('.single-faq').eq(0).addClass('active').children('.faq-acc-content').show();
        jQuery('.faq-section h3.faq-acc-title').click(function(){
            jQuery(this).parent('.single-faq').toggleClass('active').children('.faq-acc-content').slideToggle();
            jQuery(this).parent().siblings().removeClass('active').children('.faq-acc-content').slideUp();
        });


<script>


