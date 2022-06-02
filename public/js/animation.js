		let toogle		= 	document.querySelector('#toogle');
		let navigation	=	document.querySelector('#navigation');
		let main		=	document.querySelector('#main');

		document.getElementById('toogle').onclick = function() {
    		navigation.classList.toggle('active');
    		main.classList.toggle('active');
		}

		let list = document.querySelectorAll('#navigation li');
		function activeLink(){
			list.forEach((item) => 
			item.classList.remove('hovered'));
			this.classList.add('hovered');
		}
		list.forEach((item) => 
			item.addEventListener('mouseover',activeLink));