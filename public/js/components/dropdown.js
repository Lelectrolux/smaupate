const dropdown = () => ({
    isOpen: false,
    close() {
        return this.isOpen = false
    },
    open() {
        return this.isOpen = true
    },
    toggle() {
        return this.isOpen = !this.isOpen
    },
    closeOnResize(breakpoint) {
        if (window.innerWidth > breakpoint) {
            this.close()
        }
    }
})
