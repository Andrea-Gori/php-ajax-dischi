var app = new Vue ({
  el: '#root',
  data:{
    disks: [],
    artist:'',
    arrayArtists: [],
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
    cambia: function () {
      axios.get(`http://localhost/PHP/php-ajax-dischi/author_change.php?author=${this.artist}`).then((response) => {
        this.disks = response.data;
      });
    },
  },
  created() {
    axios.get('http://localhost/PHP/php-ajax-dischi/dati.php').then((response) => {
      this.disks = response.data;
      for (let i = 0; i < response.data.length; i++) {
        let artist = response.data[i].author;
        if (!(this.arrayArtists.includes(artist))) {
          this.arrayArtists.push(artist)
        }
      }
    });
  },
});