var urlUsers = 'https://jsonplaceholder.typicode.com/users';
	new vue({
		el: '#main',
		created: function(){
			this.getUsers();
		},
		data: {
			lists: []
		},
		methods: {
			getUsers: function(){
				axios.get(urlUsers).then(response => {
					this.lists=response.data
				});
			}
		}
	});