document.querySelector('.mobile-nav').onclick = function(){
    let mobileNav = document.querySelector('.mobile-nav-menu');
    if( mobileNav.style.display == 'block'){
        mobileNav.style.display  = 'none';
        let mobileNavUlFirst = document.querySelector('.ul-first-mobile');
        mobileNavUlFirst.style.display = 'none';
        let mobileSpanFirst = document.querySelector('.mobile-first span');
        mobileSpanFirst.style.background = 'white';
        let mobileNavUlTwelve = document.querySelector('.ul-twelve-mobile');
        mobileNavUlTwelve.style.display = 'none';
        let mobileSpanTwelve = document.querySelector('.mobile-twelve span');
        mobileSpanTwelve.style.background = 'white';
    }
    else{
        mobileNav.style.display = 'block';
    }
}
document.querySelector('.mobile-first').onclick = function(){
    let mobileSpan = document.querySelector('.mobile-first span');
    let mobileNavUl = document.querySelector('.ul-first-mobile');
    if(mobileNavUl.style.display == 'block'){
        mobileNavUl.style.display = 'none';
        mobileSpan.style.background = 'white';
    }
    else{
        mobileNavUl.style.display = 'block';
        mobileSpan.style.background = '#eeeeee';
    }
}
document.querySelector('.mobile-twelve').onclick = function(){
    let mobileSpan = document.querySelector('.mobile-twelve span');
    let mobileNavUl = document.querySelector('.ul-twelve-mobile');
    if(mobileNavUl.style.display == 'block'){
        mobileNavUl.style.display = 'none';
        mobileSpan.style.background = 'white';
    }
    else{
        mobileNavUl.style.display = 'block';
        mobileSpan.style.background = '#eeeeee';
    }
}
document.querySelector('.Catalog-nav').onclick = function(){
    let contactNav = document.querySelector('.header-nav-menu');
    if(contactNav.style.display == 'block'){
        contactNav.style.display = 'none';
    }
    else{
        contactNav.style.display = 'block';
    }
}