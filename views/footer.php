<div class="quick_link-grap" >
               <div class="quick_link-title text-center fs-2 text-dark">QUICK LINKS</div>
               <div class="quick_link mt-3">
                    <a href="./" class="quick_link_a">SHOP NOW</a>
                    <a href="?route=contact" class="quick_link_a">CONTACT</a>
                    <a href="?route=support" class="quick_link_a">SUPPORT</a>
               </div>
        </div>
<div class="footer">
    <div class="row">
        <div class="col-lg-4 boxz">
             <iframe style="width:100%; height:100%; border-radius:5px ;padding:0px 60px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7295561235915!2d105.84769451473096!3d21.003475286012016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgUC4gTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1651162056247!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-2 boxz">
            <div class="footer-one-title">LUX RESOURCES</div>
            <ul class="">
                <li class="footer-item"><a href="#comeback">Customer Service</a></li>
                <li class="footer-item">Product Catalog</li>
                <li class="footer-item">Affiliate Program</li>
                <li class="footer-item">FAQs</li>
                <li class="footer-item">Shipping and Returns</li>
                <li class="footer-item">Five Year Warranty</li>
                <li class="footer-item"><a href="?route=x">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="col-lg-2 boxz">
            <div class="footer-one-title">CONNECT</div>
                <ul class="" >
                    <li class="footer-item"><a style="color:white;"  href="https://www.facebook.com/luxledlights"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
                    <li class="footer-item"><a style="color:white;"  href="https://www.pinterest.com/luxledlights/"><i class="fa-brands fa-pinterest"></i></i>Pinterest</a></li>
                    <li class="footer-item"><a style="color:white;"  href="https://www.instagram.com/luxledlighting/"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                </ul>
        </div>

        <div class="col-lg-4 boxz">
            <div class="footer-one-title">ABOUT US</div>
            <div class="footer-content">LUX LED Lighting is owned and operated by Gold Crest LLC, an industry leader in LED lighting and portable technology since 1985. Gold Crest, LLC is headquartered in Santa Barbara, California. We design and manufacture LED Lighting products for hospitality, workspace, and residential interiors. We have made a collection of our popular LED lamps available to buy direct from our exclusive 
            <a class="footer-link" href="#">Online Store.</a></div>
        </div>

    </div>
</div>
</div>

<script>
        function validate(data){
            function requireds(rules,value){
                if(rules === ''){
                    return '';
                }
                if(rules === 'email'){
                    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)){
                        return '';
                    }else{
                        return 'This is not email';  
                    }
                }
                if(rules.split(":")){
                    var min = rules.split(":");
                    if(value.length < min[1]){
                            return 'Enter at least '+min[1]+' characters';
                        }else{
                            return '' ;
                        }
                }
            }

            var validates = {
                required: function(value,rules){
                    return value ? requireds(rules,value) :"Please enter this field";
                }
            }

            var forms = document.querySelector(data);

            inputs= forms.querySelectorAll('[rules]');  

            inputs.forEach(function(input){
                input.onblur = function(e){
                    var rules = input.getAttribute('rules');
                    message = e.target.parentElement.querySelector('.message');
                    message.innerHTML =validates.required(e.target.value,rules)
                }
                input.oninput = function(e){
                    var rules = input.getAttribute('rules');
                    message = e.target.parentElement.querySelector('.message');
                    message.innerHTML = ''; 
                }
            })    
        }
</script>
<script src="./src/index.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>