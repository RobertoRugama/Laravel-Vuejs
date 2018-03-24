
	new Vue({
		el: '#crud',
		created: function(){
			this.getKeeps();
		},
		data: {
			Keeps: []
		},
		methods: {
			getKeeps: function(){
				var urlKeeps = 'task';
				axios.get(urlKeeps).then(response =>{
					this.Keeps = response.data
				});
			}
		}
		
	});