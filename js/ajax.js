let content = document.getElementById('ajax-content')

function fetchContent(el) {
    let view = el.getAttribute('a-view')
    let folder = el.getAttribute('a-folder')
    const scriptSRC = el.getAttribute('a-script')
    fetch(`../ajax/${folder}/${view}.php`)
        .then(response => {
            let php = response.text()
            return php
        })
        .then(php => {
            content.innerHTML = php
            return content
        })
        .then(() => {
          const script = document.createElement("script")
          script.async = true
          script.src = `../js/${scriptSRC}.js`
          document.body.appendChild(script);      
        })
}