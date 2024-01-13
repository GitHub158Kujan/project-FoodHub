document.addEventListener('DOMContentLoaded', function () {
    const changePasswordBtn = document.getElementById('changePasswordBtn');
    const passwordFields = document.getElementById('passwordFields');
    const savePasswordBtn = document.getElementById('savePasswordBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    const saveBtn = document.getElementById('saveBtn');
    const settingsForm = document.getElementById('settingsForm');

    changePasswordBtn.addEventListener('click', function () {
        passwordFields.style.display = 'block';
        savePasswordBtn.style.display = 'block';
        changePasswordBtn.disabled = true;
    });

    cancelBtn.addEventListener('click', function () {
        passwordFields.style.display = 'none';
        savePasswordBtn.style.display = 'none';
        changePasswordBtn.disabled = false;

        // Clear password fields
        document.getElementById('currentPassword').value = '';
        document.getElementById('newPassword').value = '';
    });

    saveBtn.addEventListener('click', function () {
        // Implement saving settings logic here
        alert('Settings saved successfully!');
    });
});
