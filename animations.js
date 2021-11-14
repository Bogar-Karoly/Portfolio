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
    const navBar = document.querySelector('#nav');

    //get the offset of the navbar element
    var offset = navBar.offsetTop;

    //get the size of the navbar element and its position relative to the viewport
    var rect = navBar.getBoundingClientRect();
    
    //create a virtual div element and set rect as its maxheight in pixel
    const virtualElement = document.createElement('div');
    virtualElement.style.height = parseInt(rect.height) + 'px';
    
    const fix = function() {
        //get scroll Y value
        var scroll = window.scrollY;
        
        //check if fixed
        var isFixed = document.body.classList.contains('fixed');
        rect = navBar.getBoundingClientRect();
        
        //check if offset <= Y and not fixed
        if(scroll >= offset && !isFixed) {
            document.body.classList.add('fixed');
            navBar.parentNode.insertBefore(virtualElement, navBar);
        }
        else if(scroll <= offset && isFixed) {
            document.body.classList.remove('fixed');
            document.body.removeChild(virtualElement);
        }
              
    }
    window.addEventListener('scroll', fix);
})();

const btn = document.getElementById("submit-btn");
btn.addEventListener('click', async function(e) {
    const email = document.getElementById("email").value;
    const msg = document.getElementById("message").value;
    const subject = document.getElementById("subject").value;

    const response = await sendRequest({email: email, msg: msg, subject: subject});
    alert(response.data);
});
function sendRequest(params) {
    return new Promise((res,rej) => {
        jQuery.ajax({
            type: "POST",
            url: "sendmail.php",
            data: params,
            success: function(result) {
                res(JSON.parse(result))
            },
            error: function(error) {
                console.log(error);
            }
        })
    });
}