//project container
(function(){

    //select all title class element
    var coll = document.getElementsByClassName("title");

    //add event(s) to them
    for (var i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
        
            this.classList.toggle("active");

            //select content(details) element
            var content = this.nextElementSibling;

            //select arrow element
            var arrow = this.children[0].children[1].children[0];

            //check if maxHeight style exist
            if (content.style.maxHeight) {
                //change arrow's direction
                arrow.classList.remove('fa-angle-up');
                arrow.classList.add('fa-angle-down');

                //change box radius
                this.style.borderRadius = "10px";

                //set maxHeight
                content.style.maxHeight = null;
            }
            else {
                //change arrow's direction
                arrow.classList.remove('fa-angle-down');
                arrow.classList.add('fa-angle-up');

                //change box radius
                this.style.borderBottomLeftRadius = "0px";
                this.style.borderBottomRightRadius = "0px";
                        
                //set maxHeight
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
})();

//navigation
(function(){

    //get navbar element
    var navBar = document.querySelector('#nav');

    //get the offset of the navbar element
    var offset = navBar.offsetTop;

    //get the size of the navbar element and its position relative to the viewport
    var rect = navBar.getBoundingClientRect();
    
    //create a virtual div element and set rect as its maxheight in pixel
    var virtualElement = document.createElement('div');
    virtualElement.style.height = parseInt(rect.height) + 'px';
    
    var fix = function() {
        
        //get scroll Y value
        var scroll = window.scrollY;
        
        //check if fixed
        var isFixed = document.body.classList.contains('fixed');
        
        //check if offset <= Y and not fixed
        if(scroll >= offset && !isFixed) {
              
            document.body.classList.add('fixed');

            navBar.style.width = parseInt(rect.width) + 'px';
              
            navBar.parentNode.insertBefore(virtualElement, navBar);
        }
        else if(scroll <= offset && isFixed) {

            document.body.classList.remove('fixed');
            navBar.style.width = 'auto';
              
            var formerFirstChild = document.body.removeChild(virtualElement);
        }
              
    }
    window.addEventListener('scroll', fix);
})();