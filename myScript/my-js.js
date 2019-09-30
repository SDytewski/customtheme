console.log("I am here");




 (  function () {
    var i = 0;


    var images = ["http://localhost/wordpress/wp-content/themes/newtheme/images/hero4.jpg", 
"http://localhost/wordpress/wp-content/themes/newtheme/images/twoGirls4.jpg", "http://localhost/wordpress/wp-content/themes/newtheme/images/umbrella5.jpg"];

  
    function toggle(){
        document.getElementById('flipImage').src = images[i];

        i = (i +1) % images.length;


    }         
    setInterval(toggle, 1500);
})
();
    





           














// var i = 0;
// var renew = setInterval(function(){
    
    

//     if(i+1==images.length) { i=-1;
//         document.getElementById("img1").src = images[0] };

//         document.getElementById("img1").src = images[1]; 
     

// },1000);


