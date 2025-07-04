<script>
  const data = [
    { name: 'Home', url: 'index.php' },
    { name: 'Units', url: 'units.php' },
    { name: 'Tier List', url: 'tierlist.php' },
    { name: 'Codes', url: 'codes.php' }
  ];

  const input = document.getElementById('search-input');
  const suggBox = document.getElementById('suggestions');
  const form = document.getElementById('search-form');

  function filterByName(items, search) {
    const normalized = search.toLowerCase().trim();
    return items.filter(item => item.name.toLowerCase().includes(normalized));
  }

  input.addEventListener('input', () => {
    const val = input.value;
    const matches = filterByName(data, val);

    suggBox.innerHTML = '';
    if (!val || matches.length === 0) {
      suggBox.style.display = 'none';
      return;
    }

    matches.forEach(item => {
      const div = document.createElement('div');
      div.textContent = item.name;
      div.addEventListener('mousedown', () => {
        input.value = item.name;
        suggBox.style.display = 'none';
        window.location.href = item.url;
      });
      suggBox.appendChild(div);
    });

    suggBox.style.display = 'block';
  });

  document.addEventListener('click', (e) => {
    if (!form.contains(e.target) && e.target !== suggBox) {
      suggBox.style.display = 'none';
    }
  });

  form.addEventListener('submit', (e) => {
  e.preventDefault();
  const val = input.value.trim().toLowerCase();
  const exactMatch = data.find(item => item.name.toLowerCase() === val);

  if (exactMatch) {
    window.location.href = exactMatch.url;
  } else {
    const suggestions = filterByName(data, val);
    if (suggestions.length > 0) {
      window.location.href = suggestions[0].url; // redireciona para a primeira sugestão
    } else {
      alert('Nenhuma página encontrada.');
    }
  }
});

</script>