class VideoApp{
    constructor(){
      //INITIALIZE YOUR DOM SELECTORS
      this.video = document.querySelector('#video');
      this.play = document.querySelector('#play');
      this.stop = document.querySelector('#stop');
      this.progress = document.querySelector('#progress');
      this.timeStamp = document.querySelector('#timestamp');
    }
  
    //FXN TO RUN THE PROGRAM
    run(){
      //WE LISTEN FOR EVENTS HERE
      document.addEventListener('contextmenu', event => event.preventDefault());
      this.video.addEventListener('click',this.handleClick);
      console.log(this.video);
      this.video.addEventListener('pause',this.updateIcon);
      this.video.addEventListener('play',this.updateIcon);
      this.video.addEventListener('timeupdate',this.updateProgress);
  
      this.play.addEventListener('click',this.togglePlayPause);
      this.stop.addEventListener('click',this.stopVideo);
      this.progress.addEventListener('change', this.setVideoProgress);
  
    }

    handleClick = (e) => {
        e.preventDefault();
    }
  
    //Fxns needed to RUN App
    togglePlayPause = (e) => {
     //Video tag Property paused is used and Methds
      if(this.video.paused){
        this.video.play();
      }else{
        this.video.pause();
      }
    }
  
    updateIcon = () => {
      if(this.video.paused){
        this.play.innerHTML = `<i class="fa fa-play fa-2x"></i>`;
      }else{
        this.play.innerHTML = `<i class="fa fa-pause fa-2x"></i>`;
      }
    }

    updateProgress = () => {
      // console.log(this.video.currentTime);
      this.progress.value = (this.video.currentTime/this.video.duration) * 100
  
      //Change the TimeStamp
      //Current Time is in seconds
  
      let mins = Math.floor(this.video.currentTime/60);
      if(mins < 10){
        mins = '0' + String(mins);
      }
  
      let secs = Math.floor(this.video.currentTime % 60);
      if(secs < 10){
        secs = '0'+ String(secs);
      }
  
    this.timeStamp.innerHTML = `${mins}:${secs}`;
  
    }
  
    stopVideo = () => {
      this.video.currentTime = 0;
      this.video.pause();
    }
  
    setVideoProgress = () => {
      // this.video
      this.video.currentTime = (+this.progress.value/100) *this.video.duration;
  
    }
  
  }
  
  
  let customVideoApp = new VideoApp();
  customVideoApp.run();