

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),
            {
                toolbar: ["heading", "|", "bold", "italic", "link", "bulletedList", "numberedList", "alignment", "|", "FontBackgroundColor", "FontColor", "Highlight", "|", "CodeBlock", "|", "indent","Outdent","BlockQuote", "HorizontalLine", "Subscript", "Superscript","StrikeThrough","Underline","|","InsertTable","MediaEmbed","ImageUpload","undo","redo","|","ckfinder"]
            })
            .catch(error =>
            {
                console.error(error);
            });
    </script>
    <script>
        let selectList = document.querySelector("#category");
        selectList.addEventListener("change",(e) =>
        {
            if(e.target.value === "new")
            {
                document.querySelector("#newCategory").style.display = "block";
            }
            else
            {
                document.querySelector("#newCategory").style.display = "none";
            }
        });
    </script>
    <script>
        let images = [];
        let code = "@-insertImage";
        let number = 0;
        let part1 = "<img class=\"contentImage\" src=\"";
        let part2 = "\" alt=\"";
        let part3 = "\">";

        document.querySelector("#createNewImageCode").addEventListener("click", (e) =>
        {
            let source = document.getElementById("source").value;
            let alt = document.getElementById("alt").value;

            if(source === "" || alt === "")
            {
                alert("Lütfen Source ve Alt Kısmını Doldurunuz!")
            } else {
                let theTag = part1 + source + part2 + alt + part3;
                let theCode = code + number + "-@";

                let li = document.createElement("li");
                li.className = "list-group-item";
                li.style.overflow = "scroll";
                li.textContent = theCode + " = " + theTag;
                document.getElementById("addedImages").prepend(li);

                images[number] =
                {
                  "code" : theCode,
                  "tag" : theTag
                };

                document.querySelector("#imgcode").value = theCode;

                document.querySelector("#imagesJson").value = JSON.stringify(images);

                number++;
            }
            e.preventDefault();
        })
    </script>
</body>
