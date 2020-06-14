class Core {
    static init() {
        this.updateCsrfToken();
    }

    static updateCsrfToken() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }
}
export { Core };
