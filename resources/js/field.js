Nova.booting((Vue, router) => {
    Vue.component('assignment-item', require('./components/AssignmentItem'));
    Vue.component('assignment-list', require('./components/AssignmentList'));
    Vue.component('assignments-wrapper', require('./components/AssignmentsWrapper'));
    Vue.component('detail-assignments-field', require('./components/AssignmentsField'));
})
