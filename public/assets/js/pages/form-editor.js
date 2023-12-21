var quill = new Quill("#snow", {
  theme: "snow",
});

var bubble = new Quill("#bubble", {
  theme: "bubble",
});

// Initialize Quill
var quill = new Quill("#full", {
  bounds: "#full-container .editor",
  modules: {
    toolbar: [
      [{ font: [] }, { size: [] }],
      ["bold", "italic", "underline", "strike"],
      [{ color: [] }, { background: [] }],
      [{ script: "super" }, { script: "sub" }],
      [{ list: "ordered" }, { list: "bullet" }, { indent: "-1" }, { indent: "+1" }],
      ["direction", { align: [] }],
      ["link", "image", "video"],
      ["clean"],
    ],
  },
  theme: "snow",
});

// Handle text change event
quill.on("text-change", function (delta, oldDelta, source) {
  document.querySelector("input[name='content']").value = quill.root.innerHTML;
});
