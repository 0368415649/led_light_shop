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

        forms.onsubmit = function(e){
            e.preventDefault();
            inputs.forEach(function(input){
                var rules = input.getAttribute('rules');
                message = input.parentElement.querySelector('.message');
                message.innerHTML =validates.required(input.value,rules)
            })
            messages = e.target.parentElement.querySelectorAll('.message');
            var check = true;
            messages.forEach(function(e){
                if(e.innerHTML !== ''){
                    check = false;
                    return 1;
                }
            })
            if(check){
                forms.submit();
            }
        }
}
