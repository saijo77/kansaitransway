(function () {
  var postInput = document.getElementById('your-post');
  var prefSelect = document.getElementById('your-select');
  var cityInput = document.getElementById('your-city');

  if (!postInput || !prefSelect || !cityInput) {
    return;
  }

  var lastZip = '';

  function normalizeZip(value) {
    return String(value || '').replace(/[^0-9]/g, '');
  }

  function setPrefecture(prefecture) {
    var options = prefSelect.options;
    var i;

    for (i = 0; i < options.length; i++) {
      if (options[i].value === prefecture) {
        prefSelect.value = prefecture;
        prefSelect.dispatchEvent(new Event('change', { bubbles: true }));
        return;
      }
    }
  }

  function fillAddress() {
    var zip = normalizeZip(postInput.value);

    if (zip.length !== 7 || zip === lastZip) {
      return;
    }

    lastZip = zip;

    fetch('https://zipcloud.ibsnet.co.jp/api/search?zipcode=' + zip)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        if (!data.results || !data.results.length) {
          return;
        }

        var result = data.results[0];
        setPrefecture(result.address1);
        cityInput.value = (result.address2 || '') + (result.address3 || '');
        cityInput.dispatchEvent(new Event('change', { bubbles: true }));
      })
      .catch(function () {
        // API error: keep manual input
      });
  }

  postInput.addEventListener('input', function () {
    var zip = normalizeZip(postInput.value);

    if (zip.length !== 7) {
      lastZip = '';
      return;
    }

    fillAddress();
  });

  postInput.addEventListener('blur', fillAddress);
})();
