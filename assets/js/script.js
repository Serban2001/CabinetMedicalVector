document.addEventListener('sticky-change', e => {
    console.log(e);
  const header = e.detail.target;  // header became sticky or stopped sticking.
  const sticking = e.detail.stuck; // true when header is sticky.
  header.classList.toggle('shadow', sticking); // add drop shadow when sticking.

  document.querySelector('.who-is-sticking').textContent = header.textContent;
});

const body = document.querySelector('body');
const btnHamburger = document.querySelector('#btnHamburger');
const header = document.querySelector('.header');
const overlay = document.querySelector('.overlay');
const fadeElems = document.querySelectorAll('.has-fade');

btnHamburger.addEventListener('click', function(){
    console.log('open hamburger');
    if(header.classList.contains('open')){ //Close Hamburger Menu
        body.classList.remove('noscroll')
        header.classList.remove('open');
        fadeElems.forEach(function(element){
            element.classList.remove('fade-in');
            element.classList.add('fade-out');
        });
        
    }
    else{ //Open Hamburger Menu
        body.classList.add('noscroll')
        header.classList.add('open');
        fadeElems.forEach(function(element){
            element.classList.remove('fade-out');
            element.classList.add('fade-in');
        });
        
    } 
});

jQuery(document).ready(function(){
    setInterval(function(){
        var el = jQuery('.slider .slide.show');
        el.removeClass('show');
        var next = el.next();
        if (next.length > 0) next.addClass('show');
        else jQuery('.slider .slide').first().addClass('show');
    }, 2500);

    jQuery('#register-form').submit(function(e) {
        e.preventDefault();

        if ( $('form')[0].checkValidity() == false ) {
            return false;
        }

        var pwd = jQuery('#pwd').val();
        var cpwd = jQuery('#cpwd').val();
        if (pwd != cpwd) {
            alert('Parola si confirmarea parolei nu sunt identice!');
            return false;
        }

        $.post('register.php', jQuery(this).serialize(), function(res) {
                    var data = JSON.parse(res);
                    jQuery('#form-msg').text(data.msg);
                    if (data.success == 1) {
                        jQuery('#form-msg').attr('class', 'alert success');
                        jQuery('#form-msg').css('display', 'block');
                        setTimeout(function(){
                            window.location = 'index.php';
                        }, 3000);
                    } else {
                        jQuery('#form-msg').attr('class', 'alert danger');
                        jQuery('#form-msg').css('display', 'block');
                    }
                });

        return false;
    });
});