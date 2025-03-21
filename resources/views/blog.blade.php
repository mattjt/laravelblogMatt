<!-- ...existing code... -->
<a href="#" onclick="handleClick(event)">Submit</a>
<!-- ...existing code... -->
<script>
function handleClick(event) {
    event.preventDefault();
    const form = document.querySelector('#myForm');
    if (form) {
        form.submit();
    } else {
        console.error('Form not found');
    }
}
</script>
<!-- ...existing code... -->
