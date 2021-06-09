 var app = new Vue( 
   {
     el: '#app',
     data : {
      albums : [],
     },

     methods : {

     },

     created(){
       axios.get("http://localhost:8888/php-ajax-dischi/api.php")
       .then(res => {
         const result = res.data; 
         this.albums = res.data ;
       })
     }
   }
 )