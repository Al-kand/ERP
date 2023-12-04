export default () => ({
    create: false,
    show: false,
    edit: false,
    product: {},

    showCreate() {
        this.product = {};
        this.hide();
        this.create = true;
    },

    showProduct(id) {
        fetch(`api/products/${id}`, {
            method: 'get',
            headers: {
                // 'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content,
                "Accept": "application/json",
            },
        }).then(response => {
            if (response.ok)
                response.json().then(data => this.product = data);
            else
                response.json().then(data => console.log(data.errors));
        });
        this.hide();
        this.show = true;
    },

    editProduct(id) {
        this.hide();
        this.edit = true;
    },

    modal() {
        return this.create || this.show || this.edit;
    },

    hide() {
        this.create = this.show = this.edit = false;
    },

    submitForm() {
        let body = new FormData(this.$el);
        fetch(this.$el.getAttribute('action'), {
            method: this.$el.getAttribute('method'),
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content,
                "Accept": "application/json",
            },
            body: body
        }).then(response => {
            if (response.ok)
                location.reload();
            else
                response.json().then(data => console.log(data.errors));
        });
    }

})