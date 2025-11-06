async function readJson(url) {
    const r=await fetch(url, {cache: 'no-store'});
    if (!r.ok) throw new Error(`Failed to fetch ${url}: ${r.status} ${r.statusText}`);
    return  r.json();
}

let login_form = document.querySelector('.login-form');
login_form.addEventListener('submit', async (e) => {
    e.preventDefault();
    let username = document.querySelector('.username-input').value.trim();
    let password = document.querySelector('.password-input').value.trim();

    try {
        const users = await readJson('../bd/users.json');
        const L = username.toLowerCase();
        const user = (Array.isArray(users) ? users : []).find(u =>
            (String(u?.username || '').toLowerCase() === L ||
                String(u?.email || '').toLowerCase() === L) &&
            String(u?.password || '') === password
        );
        if (!user) {
            alert('Invalid username or password');
            return;
        }
        localStorage.setItem('name', user.username || username);
        window.location.href = '../main/index.html';
    } catch (error) {
        console.error('Error fetching user data:', error);
        return;
    }
});