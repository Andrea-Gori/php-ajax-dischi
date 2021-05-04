var app = new Vue ({
  el: '#root',
  data:{
    disks: [],
    genere:'',
  },
  methods:{
    /* album: function () {
      axios.get('https://flynn.boolean.careers/exercises/api/array/music').then((response) => {
        this.disks = response.data.response;
        this.disks.sort((a,b) =>{
          return a.year - b.year
        } )
        });
    } */
  },
  created() {
    axios.get('http://localhost/PHP/php-ajax-dischi/dati.php').then((response) => {
      this.disks = response.data;
      
    });
  },
});