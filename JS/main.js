let elems = document.getElementsByClassName('editStudent');
let confirmIt = function (e) {
    if (!confirm('Are you sure edit?')) e.preventDefault();
};
for (let index = 0, l = elems.length; index < l; index++) {
    elems[index].addEventListener('click', confirmIt, false);
}
// let elementsDelete = document.getElementsByClassName('actionDelete');
// let confirmDelete = function deleteStudent(e) {
// if (!confirm('Are you sure delete?')) del.preventDefault();
// };
// for (let index = 0, l = elems.length; index < l; index++) {
// elementsDelete[index].addEventListener('click', confirmDelete, false);
//}


