// JavaScript для управления интерфейсом на основе ролей пользователя

class RoleBasedUI {
    constructor() {
        this.currentUser = null;
        this.init();
    }
    
    async init() {
        await this.loadCurrentUser();
        this.applyRoleRestrictions();
        this.updateUI();
    }
    
    // Загрузка информации о текущем пользователе
    async loadCurrentUser() {
        try {
            this.currentUser = window.currentUser || {
                role: 'viewer',
                username: 'viewer',
                full_name: 'Пользователь для просмотра'
            };
        } catch (error) {
            console.error('Error loading user data:', error);
        }
    }
    
    // Применение ограничений на основе роли
    applyRoleRestrictions() {
        const role = this.currentUser.role;
        
        switch(role) {
            case 'viewer':
                this.applyViewerRestrictions();
                break;
            case 'operator':
                this.applyOperatorRestrictions();
                break;
            case 'admin':
                this.applyAdminPrivileges();
                break;
        }
    }
    
    // Ограничения для пользователя с правами просмотра
    applyViewerRestrictions() {
        // Блокируем поля ввода времени
        const timeInputs = document.querySelectorAll('.time-input');
        timeInputs.forEach(input => {
            input.disabled = true;
            input.title = 'Только просмотр: изменение времени запрещено';
        });
        
        // Блокируем чекбоксы "Операция не проводилась"
        const skipCheckboxes = document.querySelectorAll('.skip-checkbox');
        skipCheckboxes.forEach(checkbox => {
            checkbox.disabled = true;
            checkbox.title = 'Только просмотр: изменение запрещено';
        });
        
        // Скрываем кнопки управления операциями
        const managementBtn = document.getElementById('operations-management-btn');
        if (managementBtn) managementBtn.style.display = 'none';
    }
    
    // Ограничения для оператора
    applyOperatorRestrictions() {
        // Оператор может вводить время только в пустые поля
        this.makeTimeInputsOneTimeOnly();
        
        // Блокируем кнопки управления операциями (только для администратора)
        const managementBtn = document.getElementById('operations-management-btn');
        if (managementBtn) managementBtn.style.display = 'none';
    }
    
    // Привилегии администратора
    applyAdminPrivileges() {
        // Администратор имеет полный доступ, ничего не блокируем
        // Но показываем дополнительные элементы управления
        this.showAdminControls();
    }
    
    // Сделать поля ввода времени одноразовыми для оператора
    makeTimeInputsOneTimeOnly() {
        const timeInputs = document.querySelectorAll('.time-input');
        
        timeInputs.forEach(input => {
            // Проверяем, есть ли уже значение
            if (input.value) {
                input.disabled = true;
                input.title = 'Время уже внесено. Изменение запрещено для оператора.';
            } else {
                // Добавляем обработчик для блокировки после ввода
                input.addEventListener('change', function() {
                    if (this.value) {
                        this.disabled = true;
                        this.title = 'Время внесено. Изменение запрещено для оператора.';
                    }
                });
            }
        });
    }
    
    // Показать элементы управления для администратора
    showAdminControls() {
        // Добавляем кнопку управления поездами, если её нет
        if (!document.getElementById('trains-management-btn')) {
            const controls = document.querySelector('.controls .report-buttons');
            if (controls) {
                const trainsBtn = document.createElement('button');
                trainsBtn.id = 'trains-management-btn';
                trainsBtn.className = 'report-btn';
                trainsBtn.innerHTML = '<i class="fas fa-train"></i> Управление поездами';
                trainsBtn.style.background = 'linear-gradient(135deg, #e74c3c 0%, #c0392b 100%)';
                trainsBtn.onclick = () => this.showTrainsManagement();
                controls.appendChild(trainsBtn);
            }
        }
    }
    
    // Обновление интерфейса на основе роли
    updateUI() {
        // Обновляем отображение информации о пользователе
        this.updateUserInfo();
        
        // Обновляем заголовок с указанием роли
        this.updatePageTitle();
    }
    
    // Обновление информации о пользователе в интерфейсе
    updateUserInfo() {
        // Создаем или обновляем элемент с информацией о пользователе
        let userInfoElement = document.getElementById('user-info');
        
        if (!userInfoElement) {
            userInfoElement = document.createElement('div');
            userInfoElement.id = 'user-info';
            userInfoElement.style.cssText = `
                position: fixed;
                top: 10px;
                right: 10px;
                background: white;
                padding: 10px 15px;
                border-radius: 10px;
                box-shadow: 0 3px 10px rgba(0,0,0,0.1);
                font-size: 14px;
                z-index: 1000;
                border-left: 4px solid #3498db;
            `;
            document.body.appendChild(userInfoElement);
        }
        
        const roleColors = {
            'viewer': '#3498db',
            'operator': '#f39c12', 
            'admin': '#27ae60'
        };
        
        userInfoElement.innerHTML = `
            <div style="font-weight: 600; color: #2c3e50;">${this.currentUser.full_name}</div>
            <div style="color: #7f8c8d; font-size: 12px;">${this.currentUser.username}</div>
            <div style="color: ${roleColors[this.currentUser.role]}; font-weight: 600; font-size: 12px; margin-top: 5px;">
                ${this.getRoleDisplayName(this.currentUser.role)}
            </div>
            <button onclick="roleUI.logout()" style="margin-top: 8px; padding: 4px 8px; font-size: 11px; background: #e74c3c; color: white; border: none; border-radius: 4px; cursor: pointer;">
                Выйти
            </button>
        `;
    }
    
    // Получение отображаемого имени роли
    getRoleDisplayName(role) {
        const roleNames = {
            'viewer': 'Только просмотр',
            'operator': 'Оператор',
            'admin': 'Администратор'
        };
        return roleNames[role] || role;
    }
    
    // Обновление заголовка страницы
    updatePageTitle() {
        const roleDisplay = this.getRoleDisplayName(this.currentUser.role);
        document.title = `[${roleDisplay}] Контроль технологических операций`;
    }
    
    // Выход из системы
    logout() {
        if (confirm('Вы уверены, что хотите выйти?')) {
            window.location.href = 'logout.php';
        }
    }
    
    // Показ управления поездами (для администратора)
    showTrainsManagement() {
        alert('Функция управления поездами доступна только администраторам');
        // Здесь будет реализация модального окна управления поездами
    }
    
    // Проверка прав перед выполнением действия
    checkActionPermission(action) {
        const permissions = {
            'viewer': ['view', 'print', 'report'],
            'operator': ['view', 'print', 'report', 'input_time', 'add_reason'],
            'admin': ['view', 'print', 'report', 'input_time', 'add_reason', 'modify_data', 'manage_operations', 'manage_trains']
        };
        
        const rolePermissions = permissions[this.currentUser.role] || [];
        return rolePermissions.includes(action);
    }
    
    // Защищенное выполнение действия
    executeIfAllowed(action, callback) {
        if (this.checkActionPermission(action)) {
            callback();
        } else {
            alert('У вас недостаточно прав для выполнения этого действия');
        }
    }
}

// Инициализация системы управления интерфейсом на основе ролей
const roleUI = new RoleBasedUI();

// Функция для использования в обработчиках событий
function requirePermission(action, callback) {
    return function(event) {
        roleUI.executeIfAllowed(action, () => callback(event));
    };
}