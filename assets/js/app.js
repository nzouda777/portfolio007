function carouselData(slides) {
    return {
      slides,
      activeSlide: 1,
      goToPrevious() {
        this.activeSlide =
          this.activeSlide === 1 ? this.slides.length : this.activeSlide - 1;
      },
      goToNext() {
        this.activeSlide =
          this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1;
      }
    };
  }
  