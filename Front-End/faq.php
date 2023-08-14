<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search FAQs" aria-label="Search FAQs"
                        aria-describedby="faq-search-button" id="search-query">
                    <button class="btn btn-primary" type="button" id="faq-search-button"
                        onclick="search()">Search</button>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="accordion" id="search-results">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-heading-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1">
                            Question 1?
                        </button>
                    </h2>
                    <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1"
                        data-bs-parent="#search-results">
                        <div class="accordion-body">
                            Answer 1.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                            Question 2?
                        </button>
                    </h2>
                    <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2"
                        data-bs-parent="#search-results">
                        <div class="accordion-body">
                            Answer 2.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const searchQueryInput = document.getElementById("search-query")
        const search_results = document.getElementById("search-results");

        searchQueryInput.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                search();
            }
        });

        function search() {
            const searchQuery = searchQueryInput.value.trim();
            console.log("Searching for " + searchQuery);
            fetchResults(searchQuery);
        }

        function fetchResults(query) {
            fetch("searchfaq.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: `keyword=${encodeURIComponent(query)}`,
            })
                .then((response) => response.json())
                .then((data) => {
                    displayResults(data);
                });
        }

        function displayResults(data) {
            search_results.innerHTML = "";

            if (data.length > 0) {
                console.log(data);
                let counter = 1;
                data.forEach((item) => {
                    const row = document.createElement("div");
                    row.className = "accordion-item";
                    row.innerHTML = `<h2 class="accordion-header" id="faq-heading-${counter}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-collapse-${counter}" aria-expanded="false" aria-controls="faq-collapse-${counter}">
                            ${item.question}?
                        </button>
                    </h2>
                    <div id="faq-collapse-${counter}" class="accordion-collapse collapse" aria-labelledby="faq-heading-${counter}"
                        data-bs-parent="#search-results">
                        <div class="accordion-body">
                            ${item.answer}.
                        </div>
                    </div>`
                    search_results.appendChild(row);
                    counter++;
                });
            } else {
                const noResults = document.createElement("p");
                noResults.textContent = "No results found.";
                search_results.appendChild(noResults);
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>