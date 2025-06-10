document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.history-menu a');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Удаляем активный класс у всех пунктов
            menuItems.forEach(i => i.classList.remove('active'));
            
            // Добавляем активный класс текущему пункту
            this.classList.add('active');
            
            // Здесь можно загружать соответствующий контент
            // Например, через AJAX или показывать скрытые блоки
        });
    });
});