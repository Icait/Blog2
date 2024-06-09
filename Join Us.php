
function handleSubmit(event) {
    event.preventDefault();
  
    const data = new FormData(event.target);
  
    // Do a bit of work to convert the entries to a plain JS object
    const value = Object.fromEntries(data.entries());
  
    console.log({ value });
  }
  
  const form = document.querySelector('form');
  form.addEventListener('submit', handleSubmit);