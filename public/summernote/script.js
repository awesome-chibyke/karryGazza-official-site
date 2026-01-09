if (jQuery().summernote) {
    $(".summernote").summernote({
        dialogsInBody: true,
        minHeight: 250,
    });
    $(".summernote-simple").summernote({
        dialogsInBody: true,
        minHeight: 150,
        toolbar: [
            ["style", ["bold", "italic", "underline", "clear"]],
            ["font", ["strikethrough"]],
            ["para", ["paragraph"]],
        ],
    });
}

// tooltip
$("[data-toggle='tooltip']").tooltip();

// popover
$('[data-toggle="popover"]').popover({
    container: "body",
});
