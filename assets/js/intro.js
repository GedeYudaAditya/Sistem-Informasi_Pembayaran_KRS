
const getText = document.querySelector('.intro-text h1#getAnimate'),
	getImg = document.querySelector('.intro-text #titleInteger'),
	nav = document.querySelector('header.navbar');


const show = text => {
	getText.innerHTML = text;
	getText.style.animationName = "intro-show";
}

const reset = () => {
	getText.style.animationName = "intro-remove";
}

const animate = (text, next) => {
	show(text);
	if (next) {
		setTimeout(() => {
			reset();
		}, 3000)
	}
}



animate(getText.dataset.first, true);
setTimeout(() => {
	animate(getText.dataset.sec, true)
	setTimeout(() => {
		getText.classList.add('d-none')
		getImg.classList.remove('d-none')
		getImg.style.animationName = "intro-show";
		getImg.style.animationDuration = "5s";
		setTimeout(() => {
			nav.classList.remove('d-none')
		}, 2500)
	}, 5000)
}, 5000)

window.onscroll = () => {
	nav.classList.remove('d-none')
};
