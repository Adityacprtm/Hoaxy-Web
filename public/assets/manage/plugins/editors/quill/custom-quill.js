// With Tooltip
var quill = new Quill("#quill-tooltip", {
    modules: {
        toolbar: "#toolbar-container"
    },
    placeholder: "Compose an epic...",
    theme: "snow"
});

// console.log(quill.getContents());

// Enable all tooltips
$('[data-toggle="tooltip"]').tooltip();

// Can control programmatically too
$(".ql-italic").mouseover();
setTimeout(function() {
    $(".ql-italic").mouseout();
}, 2500);

// function myFunction() {
//     // console.log(quill.getContents());
//     var myEditor = document.querySelector("#quill-tooltip");
//     var html = myEditor.children[0].innerHTML;
//     console.log(html);
// }
