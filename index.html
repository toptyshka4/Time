<?php
require_once 'auth_system.php';
$user = requireAuth(); // Проверка авторизации
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контроль суточного плана-графика технологических операций</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Все существующие стили остаются без изменений */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            min-height: 100vh;
        }
        
        .container {
            max-width: 6000px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            padding: 30px;
            overflow: auto;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .app-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f2f5;
            position: relative;
        }
        
        h1 {
            color: #2c3e50;
            font-size: 2.2rem;
            margin-bottom: 10px;
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        
        .app-subtitle {
            color: #7f8c8d;
            font-size: 1.1rem;
            font-weight: 400;
        }
        
        .controls {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e7eb 100%);
            border-radius: 15px;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .date-selection {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .date-label {
            font-weight: 600;
            color: #2c3e50;
            font-size: 1rem;
        }
        
        .date-input {
            padding: 10px 15px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: white;
        }
        
        .date-input:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            outline: none;
        }
        
        .current-time {
            font-weight: 600;
            color: #2c3e50;
            padding: 10px 15px;
            background: white;
            border-radius: 10px;
            border: 2px solid #e4e7eb;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }
        
        .current-time i {
            color: #3498db;
        }
        
        .today-btn, .report-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .today-btn {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
        }
        
        .today-btn:hover {
            background: linear-gradient(135deg, #27ae60 0%, #219653 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        
        .report-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .data-info {
            margin-top: 15px;
            margin-bottom: 20px;
            padding: 15px;
            background: linear-gradient(135deg, #e8f4fc 0%, #d6e6f2 100%);
            border-radius: 12px;
            text-align: center;
            font-size: 14px;
            color: #2980b9;
            font-weight: 500;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            border: 1px solid #d1e8f2;
        }
        
        .schedule-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 12px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        .schedule-table th,
        .schedule-table td {
            border: 1px solid #e4e7eb;
            padding: 8px;
            text-align: center;
            transition: all 0.2s ease;
        }
        
        .schedule-table th {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            position: sticky;
            top: 0;
            z-index: 10;
            font-weight: 600;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }
        
        .parameters-header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            min-width: 180px;
            max-width: 180px;
            padding: 10px;
            position: relative;
        }
        
        .param-select-btn {
            width: 100%;
            padding: 10px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 8px;
            font-size: 12px;
            background: rgba(255,255,255,0.15);
            color: white;
            text-align: left;
            cursor: pointer;
            position: relative;
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .param-select-btn:hover {
            background: rgba(255,255,255,0.25);
            border-color: rgba(255,255,255,0.5);
        }
        
        .param-select-btn:after {
            content: '▼';
            font-size: 10px;
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
        }
        
        .param-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 320px;
            background: white;
            border: 2px solid #3498db;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            z-index: 100;
            max-height: 400px;
            overflow-y: auto;
            padding: 15px;
        }
        
        .param-option {
            margin-bottom: 8px;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.2s ease;
            background: #f8f9fa;
        }
        
        .param-option:hover {
            background: #3498db;
            transform: translateX(5px);
        }
        
        .param-option:hover .param-label {
            color: white;
        }
        
        .param-checkbox {
            margin-right: 10px;
            transform: scale(1.1);
            accent-color: #3498db;
        }
        
        .param-label {
            font-size: 13px;
            line-height: 1.4;
            cursor: pointer;
            display: block;
            margin-left: 26px;
            color: #2c3e50;
            font-weight: 500;
        }
        
        .param-actions {
            margin-top: 15px;
            padding-top: 12px;
            border-top: 2px solid #e4e7eb;
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        
        .param-action-btn {
            padding: 8px 12px;
            font-size: 12px;
            border: none;
            background: #3498db;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            flex: 1;
            transition: all 0.3s ease;
            font-weight: 600;
        }
        
        .param-action-btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .dropdown-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 15px;
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
            font-size: 14px;
        }
        
        .parameters-column {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            font-weight: 600;
            position: sticky;
            left: 0;
            z-index: 5;
            min-width: 180px;
            max-width: 180px;
            word-wrap: break-word;
            padding: 12px;
            font-size: 12px;
            color: #2c3e50;
            border-right: 2px solid #dee2e6;
        }
        
        .operation-header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            min-width: 140px;
            max-width: 140px;
            word-wrap: break-word;
            padding: 12px;
            font-size: 11px;
            font-weight: 500;
        }
        
        .time-cell {
            min-width: 110px;
            max-width: 110px;
            position: relative;
        }
        
        .plan-time {
            font-size: 11px;
            color: #6c757d;
            margin-bottom: 6px;
            line-height: 1.3;
            font-weight: 500;
            padding: 4px;
            background: #f8f9fa;
            border-radius: 6px;
        }
        
        .time-input-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: 6px;
        }
        
        .time-input-label {
            font-size: 10px;
            color: #6c757d;
            text-align: center;
            font-weight: 500;
        }
        
        .time-input-wrapper {
            display: flex;
            gap: 6px;
            align-items: center;
        }
        
        .time-input {
            width: 100%;
            padding: 8px;
            border: 2px solid #e4e7eb;
            border-radius: 8px;
            text-align: center;
            font-size: 11px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .time-input:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            outline: none;
            background: white;
        }
        
        .time-input.invalid {
            border-color: #e74c3c;
            background-color: #fdedec;
            box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.2);
        }
        
        /* Стили для красной рамки при нарушениях */
        .time-input.violation-border-start,
        .time-input.violation-border-end,
        .time-input.violation-border-both {
            border: 2px solid #e74c3c !important;
            background-color: #fff5f5;
            box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.2);
        }
        
        /* Статусы операций */
        .status-normal {
            background: white;
        }
        
        .status-in-progress {
            animation: pulse-yellow-strong 1.5s infinite;
            background: linear-gradient(135deg, #fff9c6 0%, #fff183 100%);
        }
        
        .status-no-data {
            animation: pulse-red-strong 1.5s infinite;
            background: linear-gradient(135deg, #ffcccc 0%, #ff9c9c 100%);
        }

        .status-overdue {
            background: linear-gradient(135deg, #ffcccc 0%, #ff9c9c 100%);
        }

        .status-completed-late {
            background: white;
            border: 1px solid #e4e7eb;
        }

        .status-invalid {
            background: linear-gradient(135deg, #ffcccc 0%, #ff9c9c 100%);
            animation: shake 0.5s ease-in-out;
        }
        
        /* Новый стиль для статуса "не проводилась" */
        .status-skipped {
            background: linear-gradient(135deg, #e6e6e6 0%, #cccccc 100%);
            color: #666;
        }
        
        /* Добавляем новый стиль для статуса "не завершено" */
        .status-not-completed {
            animation: pulse-red-strong 1.5s infinite;
            background: linear-gradient(135deg, #ffcccc 0%, #ff9c9c 100%);
        }
        
        @keyframes pulse-yellow-strong {
            0% { 
                box-shadow: 0 0 0 0 rgba(255, 249, 198, 0.9);
                transform: scale(1);
            }
            50% { 
                box-shadow: 0 0 0 15px rgba(255, 249, 198, 0.5);
                transform: scale(1.02);
            }
            100% { 
                box-shadow: 0 0 0 0 rgba(255, 249, 198, 0);
                transform: scale(1);
            }
        }

        /* Обновляем существующую анимацию для единообразия */
        @keyframes pulse-red-strong {
            0% { 
                box-shadow: 0 0 0 0 rgba(255, 204, 204, 0.9);
                transform: scale(1);
            }
            50% { 
                box-shadow: 0 0 0 15px rgba(255, 204, 204, 0.5);
                transform: scale(1.02);
            }
            100% { 
                box-shadow: 0 0 0 0 rgba(255, 204, 204, 0);
                transform: scale(1);
            }
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-3px); }
            75% { transform: translateX(3px); }
        }
        
        .legend {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 30px;
            padding: 20px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            font-size: 13px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid #e4e7eb;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            margin-right: 15px;
            padding: 8px 12px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }
        
        .legend-color {
            width: 16px;
            height: 16px;
            border-radius: 4px;
            margin-right: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .legend-normal {
            background: white;
            border: 2px solid #dee2e6;
        }
        
        .legend-in-progress {
            background: linear-gradient(135deg, #fff9c6 0%, #fff183 100%);
            animation: pulse-yellow-strong 1.5s infinite;
        }
        
        .legend-overdue {
            background: linear-gradient(135deg, #ffcccc 0%, #ff9c9c 100%);
        }
        
        .legend-no-data {
            background: linear-gradient(135deg, #ffcccc 0%, #ff9c9c 100%);
            animation: pulse-red-strong 1.5s infinite;
        }
        
        .legend-completed-late {
            background: white;
            border: 2px solid #e4e7eb;
        }
        
        .legend-invalid {
            background: linear-gradient(135deg, #ffcccc 0%, #ff9c9c 100%);
        }
        
        .legend-skipped {
            background: linear-gradient(135deg, #e6e6e6 0%, #cccccc 100%);
        }
        
        .legend-not-completed {
            background: linear-gradient(135deg, #ffcccc 0%, #ff9c9c 100%);
            animation: pulse-red-strong 1.5s infinite;
        }
        
        .legend-violation-border {
            background: white;
            border: 2px solid #e74c3c;
        }
        
        .skip-checkbox-container {
            margin-top: 8px;
            padding-top: 8px;
            border-top: 1px dashed #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        
        .skip-checkbox {
            transform: scale(0.9);
            accent-color: #7f8c8d;
        }
        
        .skip-label {
            font-size: 10px;
            color: #666;
            cursor: pointer;
        }
        
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            display: none;
            z-index: 1000;
            font-size: 14px;
            font-weight: 500;
            animation: slideIn 0.3s ease-out;
            border-left: 4px solid #219653;
        }
        
        @keyframes slideIn {
            from { transform: translateX(100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        .signature-area {
            display: none;
        }
        
        .app-footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #f0f2f5;
            color: #7f8c8d;
            font-size: 13px;
        }
        
        /* Новые стили для отчета о нарушениях */
        .report-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 2000;
            overflow: auto;
        }
        
        .report-content {
            background-color: white;
            margin: 50px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 1200px;
            position: relative;
            max-height: 85vh;
            overflow-y: auto;
        }
        
        .close-report {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #7f8c8d;
            transition: color 0.3s ease;
        }
        
        .close-report:hover {
            color: #e74c3c;
        }
        
        .report-header {
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f2f5;
        }
        
        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .report-table th,
        .report-table td {
            border: 1px solid #e4e7eb;
            padding: 10px;
            text-align: left;
        }
        
        .report-table th {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            font-weight: 600;
        }
        
        .report-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .report-table tr:hover {
            background-color: #f0f7ff;
        }
        
        .violation-type {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .violation-late {
            background-color: #ffcccc;
            color: #c0392b;
        }
        
        .violation-early {
            background-color: #fff9c6;
            color: #d35400;
        }
        
        .violation-missing {
            background-color: #e6e6e6;
            color: #7f8c8d;
        }
        
        .violation-invalid {
            background-color: #ffcccc;
            color: #c0392b;
            font-weight: bold;
        }
        
        .reason-input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 13px;
            resize: vertical;
            min-height: 60px;
            transition: border-color 0.3s ease;
        }
        
        .reason-input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        .report-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #f0f2f5;
        }
        
        .generate-report-btn {
            background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%);
            color: white;
        }
        
        .generate-report-btn:hover {
            background: linear-gradient(135deg, #8e44ad 0%, #7d3c98 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        
        .save-report-btn {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            color: white;
        }
        
        .save-report-btn:hover {
            background: linear-gradient(135deg, #27ae60 0%, #219653 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        
        .print-report-btn {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
        }
        
        .print-report-btn:hover {
            background: linear-gradient(135deg, #2980b9 0%, #2573a7 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        
        .no-violations {
            text-align: center;
            padding: 30px;
            background: linear-gradient(135deg, #e8f4fc 0%, #d6e6f2 100%);
            border-radius: 12px;
            margin-bottom: 20px;
            color: #2980b9;
            font-weight: 500;
        }
        
        /* Стили для отчета за период */
        .period-report-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 2000;
            overflow: auto;
        }
        
        .period-report-content {
            background-color: white;
            margin: 50px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 1400px;
            position: relative;
            max-height: 85vh;
            overflow-y: auto;
        }
        
        .close-period-report {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #7f8c8d;
            transition: color 0.3s ease;
        }
        
        .close-period-report:hover {
            color: #e74c3c;
        }
        
        .period-selection {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .period-input-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .period-label {
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
        }
        
        .period-input {
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .period-input:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            outline: none;
        }
        
        .trains-selection {
            margin: 20px 0;
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #e4e7eb;
            border-radius: 10px;
            padding: 15px;
        }
        
        .operations-selection {
            margin: 20px 0;
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #e4e7eb;
            border-radius: 10px;
            padding: 15px;
        }
        
        .trains-grid, .operations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 10px;
        }
        
        .train-checkbox, .operation-checkbox {
            margin-right: 10px;
            transform: scale(1.1);
            accent-color: #3498db;
        }
        
        .train-label, .operation-label {
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 8px;
            border-radius: 6px;
            transition: background 0.2s ease;
        }
        
        .train-label:hover, .operation-label:hover {
            background: #f0f7ff;
        }
        
        .period-report-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #f0f2f5;
            gap: 15px;
        }
        
        .generate-period-report-btn {
            background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .generate-period-report-btn:hover {
            background: linear-gradient(135deg, #8e44ad 0%, #7d3c98 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        
        .period-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .stat-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            border: 1px solid #e4e7eb;
        }
        
        .stat-value {
            font-size: 24px;
            font-weight: 700;
            margin: 10px 0;
        }
        
        .stat-completed {
            color: #27ae60;
        }
        
        .stat-overdue {
            color: #e74c3c;
        }
        
        .stat-in-progress {
            color: #f39c12;
        }
        
        .stat-not-started {
            color: #7f8c8d;
        }
        
        .stat-skipped {
            color: #7f8c8d;
        }
        
        /* Стили для процентов в статистике */
        .stat-percent {
            font-size: 14px;
            font-weight: 600;
            margin-top: 5px;
        }
        
        .stat-completed .stat-percent { color: #27ae60; }
        .stat-overdue .stat-percent { color: #e74c3c; }
        .stat-in-progress .stat-percent { color: #f39c12; }
        .stat-skipped .stat-percent { color: #7f8c8d; }
        
        .period-report-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .period-report-table th,
        .period-report-table td {
            border: 1px solid #e4e7eb;
            padding: 10px;
            text-align: left;
        }
        
        .period-report-table th {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            font-weight: 600;
            position: sticky;
            top: 0;
        }
        
        .period-report-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .period-report-table tr:hover {
            background-color: #f0f7ff;
        }
        
        .status-badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .badge-completed {
            background-color: #d5f4e6;
            color: #27ae60;
        }
        
        .badge-overdue {
            background-color: #fadbd8;
            color: #e74c3c;
        }
        
        .badge-in-progress {
            background-color: #fdebd0;
            color: #f39c12;
        }
        
        .badge-not-started {
            background-color: #e5e7e9;
            color: #7f8c8d;
        }
        
        .badge-invalid {
            background-color: #fadbd8;
            color: #c0392b;
            font-weight: bold;
        }
        
        .badge-skipped {
            background-color: #e5e7e9;
            color: #7f8c8d;
        }
        
        .no-data-message {
            text-align: center;
            padding: 30px;
            background: linear-gradient(135deg, #e8f4fc 0%, #d6e6f2 100%);
            border-radius: 12px;
            margin-bottom: 20px;
            color: #2980b9;
            font-weight: 500;
        }
        
        .operations-filter {
            margin-bottom: 15px;
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .operations-filter input {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            width: 100%;
            max-width: 300px;
        }
        
        /* Стили для полей ввода ФИО диспетчера */
        .dispatcher-input {
            margin: 15px 0;
            padding: 15px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 10px;
            border: 1px solid #e4e7eb;
        }
        
        .dispatcher-input label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .dispatcher-input input {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .dispatcher-input input:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            outline: none;
        }
        
        /* Стили для подписи при печати */
        .print-signature {
            display: none;
        }
        
        @media print {
            .print-signature {
                display: block;
                margin-top: 30px;
                padding-top: 20px;
                border-top: 1px solid #000;
                font-size: 12px;
            }
            
            .signature-line {
                display: flex;
                justify-content: space-between;
                margin-top: 40px;
            }
            
            .signature-field {
                width: 45%;
                border-bottom: 1px solid #000;
                padding-bottom: 5px;
                text-align: center;
            }
        }
        
        /* Стили для управления операциями */
        .operation-item {
            transition: all 0.3s ease;
        }
        
        .operation-item:hover {
            background: #f0f7ff !important;
            transform: translateX(5px);
        }
        
        .operations-list {
            border: 1px solid #e4e7eb;
            border-radius: 10px;
            padding: 15px;
            background: #f8f9fa;
        }
        
        #operations-management-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            color: white;
            margin-right: 10px;
            background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
        }
        
        #operations-management-btn:hover {
            background: linear-gradient(135deg, #7f8c8d 0%, #6c7b7d 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        
        .operation-header:hover {
            background: linear-gradient(135deg, #34495e 0%, #2c3e50 100%) !important;
            position: relative;
        }
        
        .operation-header:hover::after {
            content: '👁️';
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 12px;
        }
        
        /* Адаптивность */
        @media (max-width: 1200px) {
            .controls {
                flex-direction: column;
                align-items: stretch;
            }
            
            .date-selection {
                justify-content: center;
            }
            
            .current-time {
                justify-content: center;
            }
            
            .report-buttons {
                justify-content: center;
            }
        }
        
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .container {
                padding: 15px;
                border-radius: 15px;
            }
            
            h1 {
                font-size: 1.5rem;
            }
            
            .date-selection {
                flex-direction: column;
                gap: 10px;
            }
            
            .parameters-column, .operation-header {
                min-width: 120px;
                max-width: 120px;
                font-size: 10px;
                padding: 8px;
            }
            
            .report-content {
                padding: 15px;
                margin: 20px auto;
                width: 95%;
            }
            
            .report-table {
                font-size: 12px;
            }
            
            .report-actions {
                flex-direction: column;
                gap: 10px;
            }
            
            .report-btn {
                width: 100%;
                justify-content: center;
            }
            
            .period-selection {
                flex-direction: column;
            }
            
            .period-stats {
                grid-template-columns: 1fr;
            }
            
            .trains-grid, .operations-grid {
                grid-template-columns: 1fr;
            }
            
            .period-report-content {
                padding: 15px;
                margin: 20px auto;
                width: 95%;
            }
            
            .report-buttons {
                flex-direction: column;
                width: 100%;
            }
        }

        /* Стили для печати */
        @media print {
            @page {
                size: landscape;
                margin: 0.5cm;
            }
            
            body {
                padding: 0;
                background-color: white;
                width: 100%;
                height: 100%;
                font-size: 8px;
            }
            
            .container {
                box-shadow: none;
                border-radius: 0;
                padding: 3px;
                width: 100%;
                max-width: 100%;
                height: auto;
                margin: 0;
                overflow: visible;
            }
            
            .controls, .legend, .notification, .data-info, .app-footer, .app-header {
                display: none;
            }
            
            .signature-area {
                display: block;
                margin-top: 20px;
                padding-top: 15px;
                border-top: 1px solid #000;
                width: 100%;
            }
            
            .signature-line {
                display: flex;
                justify-content: space-between;
                margin-top: 30px;
                font-size: 10px;
            }
            
            .signature-field {
                width: 45%;
                border-bottom: 1px solid #000;
                padding-bottom: 3px;
                text-align: center;
            }
            
            h1 {
                font-size: 16px;
                margin-bottom: 10px;
                text-align: center;
                page-break-after: avoid;
            }
            
            .schedule-table {
                font-size: 7px;
                width: 100%;
                page-break-inside: avoid;
            }
            
            .schedule-table th,
            .schedule-table td {
                padding: 2px;
                height: 2px;
            }
            
            .time-input-group {
                gap: 2px;
                margin-top: 2px;
            }
            
            .time-input-label {
                font-size: 7px;
            }
            
            .time-input {
                border: none;
                padding: 1px;
                font-size: 7px;
                height: 12px;
                background: transparent !important;
            }
            
            .time-input.invalid {
                background-color: #ffefef !important;
                border: 1px solid #ff6666 !important;
            }
            
            .plan-time {
                font-size: 7px;
                margin-bottom: 2px;
            }
            
            /* Убираем анимации для печати */
            .status-in-progress, .status-overdue, .status-no-data, .status-not-completed {
                animation: none;
            }
            
            /* Делаем цвета более насыщенными для печати */
            .status-in-progress {
                background-color: #ffff00 !important;
            }
            
            .status-overdue, .status-invalid, .status-completed-late, .status-no-data, .status-not-completed {
                background-color: #ff6666 !important;
            }
            
            .status-skipped {
                background-color: #e6e6e6 !important;
            }
            
            /* Новый стиль для нарушенных интервалов при печати */
            .print-violation {
                background-color: #ff6666 !important;
                color: #000 !important;
                font-weight: bold;
            }
            
            .parameters-column {
                background-color: #f0f0f0 !important;
                min-width: 80px;
                max-width: 80px;
                font-size: 7px;
            }
            
            .operation-header {
                background-color: #3d5270 !important;
                color: white !important;
                min-width: 60px;
                max-width: 60px;
                font-size: 7px;
            }
            
            .time-cell {
                min-width: 60px;
                max-width: 60px;
            }
            
            /* Добавляем информацию о дате печати */
            .print-date {
                display: block;
                text-align: right;
                margin-bottom: 8px;
                font-size: 8px;
                color: #666;
            }
            
            .skip-checkbox-container {
                display: none;
            }
        }
        
        /* Стили для таблицы отчета за период */
        .period-report-table th:nth-child(8),
        .period-report-table td:nth-child(8) {
            max-width: 200px;
            word-wrap: break-word;
        }

        .period-report-table td:nth-child(8) {
            font-size: 12px;
            line-height: 1.3;
        }
    </style>
</head>
<body>
    <div style='text-align:center; margin:20px;'>
        <button style="padding:10px 20px; background:#3498db; color:white; border:none; border-radius:6px; font-weight:bold; cursor:pointer; margin-right:10px;" 
                onclick="window.top.showPage('home')">← Назад в меню</button>
        <button style="padding:10px 20px; background:#e74c3c; color:white; border:none; border-radius:6px; font-weight:bold; cursor:pointer;" 
                onclick="roleUI.logout()">Выйти (<?php echo $user['username']; ?>)</button>
    </div>

    <div class="container">
        <div class="app-header">
            <h1><i class="fas fa-chart-line"></i> Контроль суточного плана-графика</h1>
            <div class="app-subtitle">Технологические операции железнодорожного транспорта</div>
        </div>
        
        <div class="controls">
            <div class="date-selection">
                <span class="date-label"><i class="fas fa-calendar-alt"></i> Дата плана:</span>
                <input type="date" id="date-selector" class="date-input">
                <button class="today-btn" id="today-btn"><i class="fas fa-calendar-day"></i> Сегодня</button>
            </div>
            
            <div class="current-time">
                <i class="fas fa-clock"></i>
                Текущее время: <span id="current-time"></span>
            </div>
            
            <!-- Кнопка управления операциями -->
            <button class="report-btn" id="operations-management-btn">
                <i class="fas fa-eye-slash"></i> Управление операциями
            </button>
            
            <!-- Переносим кнопки отчетов сюда и удаляем кнопку печати -->
            <div class="report-buttons">
                <button class="report-btn generate-report-btn" id="generate-report-btn">
                    <i class="fas fa-chart-pie"></i> Анализ нарушений
                </button>
                <button class="report-btn generate-period-report-btn" id="period-report-btn">
                    <i class="fas fa-calendar-alt"></i> Отчет за период
                </button>
            </div>
        </div>
        
        <div class="data-info" id="data-info">
            <i class="fas fa-info-circle"></i>
            Данные загружены для даты: <span id="selected-date-display"></span>
        </div>
        
        <span class="print-date" id="print-date" style="display: none;"></span>
        
        <table class="schedule-table" id="schedule-table">
            <thead>
                <tr>
                    <th class="parameters-header">
                        <button class="param-select-btn" id="param-select-btn"><i class="fas fa-cog"></i> Выбрать поезд</button>
                        <div class="param-dropdown" id="param-dropdown">
                            <div class="dropdown-title">Выберите поезд для отображения</div>
                            <div class="param-option">
                                <input type="checkbox" id="param-all" class="param-checkbox" checked>
                                <label for="param-all" class="param-label"><strong>Все поезда</strong></label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-1" class="param-checkbox param-item" checked>
                                <label for="param-1" class="param-label"> "№ 303/304 Москва-Сухум"</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-2" class="param-checkbox param-item" checked>
                                <label for="param-2" class="param-label"> "№149/120 Москва-Саранск"</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-3" class="param-checkbox param-item" checked>
                                <label for="param-3" class="param-label"> "№145/146 Москва-Назрань"</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-4" class="param-checkbox param-item" checked>
                                <label for="param-4" class="param-label">"№71/72 Москва-Чебоксары"</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-5" class="param-checkbox param-item" checked>
                                <label for="param-5" class="param-label">"№119/150 Москва-Казань"</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-6" class="param-checkbox param-item" checked>
                                <label for="param-6" class="param-label">"№155/156 Москва-Анапаа"</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-7" class="param-checkbox param-item" checked>
                                <label for="param-7" class="param-label">"№273/274 Моска-Казань"</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-8" class="param-checkbox param-item" checked>
                                <label for="param-8" class="param-label">"№151/152-265/266 Москва-Анапа"</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-9" class="param-checkbox param-item" checked>
                                <label for="param-9" class="param-label">"№739/740 Москва-Воронеж"</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-10" class="param-checkbox param-item" checked>
                                <label for="param-10" class="param-label">________________________ </label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-11" class="param-checkbox param-item" checked>
                                <label for="param-11" class="param-label">________________________ </label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-12" class="param-checkbox param-item" checked>
                                <label for="param-12" class="param-label">________________________</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-13" class="param-checkbox param-item" checked>
                                <label for="param-13" class="param-label">________________________</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-14" class="param-checkbox param-item" checked>
                                <label for="param-14" class="param-label">________________________</label>
                            </div>
                            <div class="param-option">
                                <input type="checkbox" id="param-15" class="param-checkbox param-item" checked>
                                <label for="param-15" class="param-label">________________________</label>
                            </div>
                            <div class="param-actions">
                                <button class="param-action-btn" id="param-reset-date">Сбросить для этой даты</button>
                                <button class="param-action-btn" id="param-select-all">Инвертировать выбор</button>
                                <button class="param-action-btn" id="param-apply">Применить</button>
                            </div>
                        </div>
                    </th>
                    <!-- Заголовки операций будут сгенерированы через JavaScript -->
                </tr>
            </thead>
            
            <tbody>
                <tr id="train-filter-row">
                    <td style="text-align:center; font-weight:700; color:#2c3e50;">Поезда</td>
                    <td colspan="100%" style="padding:10px;">
                        <select id="trainSelect" style="padding:6px; border-radius:6px; width:200px;">
                            <option value="all">Все поезда</option>
                        </select>
                    </td>
                </tr>

                <!-- Данные будут сгенерированы через JavaScript -->
            </tbody>
        </table>
        
        <!-- Обновленная легенда -->
        <div class="legend">
            <div class="legend-item">
                <div class="legend-color legend-normal"></div>
                <span>Не начато / Выполнено в срок</span>
            </div>
            <div class="legend-item">
                <div class="legend-color legend-in-progress"></div>
                <span>В процессе выполнения</span>
            </div>
            <div class="legend-item">
                <div class="legend-color legend-violation-border"></div>
                <span>Начато раньше плана / Завершено позже плана</span>
            </div>
            <div class="legend-item">
                <div class="legend-color legend-skipped"></div>
                <span>Операция не проводилась</span>
            </div>
            <div class="legend-item">
                <div class="legend-color legend-not-completed"></div>
                <span>Не завершено (время вышло)</span>
            </div>
        </div>
        
        <div class="app-footer">
            <p>Система контроля технологических операций © 2024</p>
        </div>
        
        <div class="signature-area">
            <div class="signature-line">
                <div class="signature-field">Диспетчер: _________________________</div>
                <div class="signature-field">Дата: _________________________</div>
            </div>
        </div>
    </div>
    
    <!-- Модальное окно для отчета о нарушениях -->
    <div class="report-modal" id="report-modal">
        <div class="report-content">
            <span class="close-report" id="close-report">&times;</span>
            
            <div class="report-header">
                <h2><i class="fas fa-exclamation-triangle"></i> Анализ нарушений технологического процесса</h2>
                <p>Дата: <span id="report-date"></span></p>
            </div>
            
            <!-- Добавляем поле для ввода ФИО диспетчера -->
            <div class="dispatcher-input">
                <label for="dispatcher-name">ФИО диспетчера:</label>
                <input type="text" id="dispatcher-name" placeholder="Введите ФИО диспетчера">
            </div>
            
            <div id="report-data">
                <!-- Сюда будет вставляться таблица с нарушениями -->
            </div>
            
            <div class="report-actions">
                <button class="report-btn save-report-btn" id="save-report-btn">
                    <i class="fas fa-save"></i> Сохранить отчет
                </button>
                <button class="report-btn print-report-btn" id="print-report-btn">
                    <i class="fas fa-print"></i> Печать отчета
                </button>
            </div>
        </div>
    </div>
    
    <!-- Модальное окно для отчета за период -->
    <div class="period-report-modal" id="period-report-modal">
        <div class="period-report-content">
            <span class="close-period-report" id="close-period-report">&times;</span>
            
            <div class="report-header">
                <h2><i class="fas fa-chart-bar"></i> Отчет за период</h2>
            </div>
            
            <!-- Добавляем поле для ввода ФИО диспетчера -->
            <div class="dispatcher-input">
                <label for="period-dispatcher-name">ФИО диспетчера:</label>
                <input type="text" id="period-dispatcher-name" placeholder="Введите ФИО диспетчера">
            </div>
            
            <div class="period-selection">
                <div class="period-input-group">
                    <label class="period-label">Дата начала:</label>
                    <input type="date" id="period-start-date" class="period-input">
                </div>
                <div class="period-input-group">
                    <label class="period-label">Дата окончания:</label>
                    <input type="date" id="period-end-date" class="period-input">
                </div>
            </div>
            
            <!-- Добавляем блок выбора поездов -->
            <div class="trains-selection">
                <h3>Выберите поезда для анализа:</h3>
                <div class="operations-filter">
                    <input type="text" id="train-filter" placeholder="Поиск поездов...">
                    <button id="select-all-trains">Выбрать все</button>
                    <button id="deselect-all-trains">Снять выбор</button>
                </div>
                <div class="trains-grid" id="trains-list">
                    <!-- Список поездов будет заполнен через JavaScript -->
                </div>
            </div>
            
            <div class="operations-selection">
                <h3>Выберите операции для анализа:</h3>
                <div class="operations-filter">
                    <input type="text" id="operation-filter" placeholder="Поиск операций...">
                    <button id="select-all-operations">Выбрать все</button>
                    <button id="deselect-all-operations">Снять выбор</button>
                </div>
                <div class="operations-grid" id="operations-list">
                    <!-- Список операций будет заполнен через JavaScript -->
                </div>
            </div>
            
            <div class="period-report-actions">
                <button class="generate-period-report-btn" id="generate-period-report">
                    <i class="fas fa-chart-pie"></i> Сформировать отчет
                </button>
                <!-- Добавляем кнопку печати для отчета за период -->
                <button class="report-btn print-report-btn" id="print-period-report-btn" style="display: none;">
                    <i class="fas fa-print"></i> Печать отчета
                </button>
            </div>
            
            <div id="period-report-results">
                <!-- Здесь будут результаты отчета -->
            </div>
        </div>
    </div>
    
    <!-- Модальное окно для управления операциями -->
    <div class="report-modal" id="operations-management-modal">
        <div class="report-content" style="max-width: 500px;">
            <span class="close-report" id="close-operations-management">&times;</span>
            
            <div class="report-header">
                <h2><i class="fas fa-eye-slash"></i> Управление операциями</h2>
                <p>Скрыть/показать технологические операции</p>
            </div>
            
            <div class="operations-list" id="operations-list-management" style="max-height: 400px; overflow-y: auto; margin: 20px 0;">
                <!-- Список операций будет заполнен здесь -->
            </div>
            
            <div class="report-actions">
                <button class="report-btn save-report-btn" id="apply-operations-visibility">
                    <i class="fas fa-check"></i> Применить
                </button>
            </div>
        </div>
    </div>
    
    <div class="notification" id="notification"></div>

    <script>
        // Передача данных пользователя в JavaScript
        window.currentUser = {
            id: <?php echo $user['id']; ?>,
            username: '<?php echo $user['username']; ?>',
            full_name: '<?php echo $user['full_name']; ?>',
            role: '<?php echo $user['role']; ?>'
        };

        // Остальной JavaScript код остается без изменений...
        document.addEventListener('DOMContentLoaded', function() {
            // Элементы DOM
            const scheduleTable = document.getElementById('schedule-table');
            const currentTimeElement = document.getElementById('current-time');
            const notificationElement = document.getElementById('notification');
            const printDateElement = document.getElementById('print-date');
            const paramSelectBtn = document.getElementById('param-select-btn');
            const paramDropdown = document.getElementById('param-dropdown');
            const paramAll = document.getElementById('param-all');
            const paramItems = document.querySelectorAll('.param-item');
            const paramSelectAll = document.getElementById('param-select-all');
            const paramApply = document.getElementById('param-apply');
            const dateSelector = document.getElementById('date-selector');
            const todayBtn = document.getElementById('today-btn');
            const selectedDateDisplay = document.getElementById('selected-date-display');
            const dataInfo = document.getElementById('data-info');
            
            // Переменные для отчета о нарушениях
            const generateReportBtn = document.getElementById('generate-report-btn');
            const reportModal = document.getElementById('report-modal');
            const closeReport = document.getElementById('close-report');
            const reportData = document.getElementById('report-data');
            const reportDate = document.getElementById('report-date');
            const saveReportBtn = document.getElementById('save-report-btn');
            const printReportBtn = document.getElementById('print-report-btn');
            
            // Переменные для отчета за период
            const periodReportBtn = document.getElementById('period-report-btn');
            const periodReportModal = document.getElementById('period-report-modal');
            const closePeriodReport = document.getElementById('close-period-report');
            const periodStartDate = document.getElementById('period-start-date');
            const periodEndDate = document.getElementById('period-end-date');
            const operationsList = document.getElementById('operations-list');
            const operationFilter = document.getElementById('operation-filter');
            const selectAllOperations = document.getElementById('select-all-operations');
            const deselectAllOperations = document.getElementById('deselect-all-operations');
            const generatePeriodReport = document.getElementById('generate-period-report');
            const periodReportResults = document.getElementById('period-report-results');
            
            // Добавляем переменные для выбора поездов в отчете за период
            const trainsList = document.getElementById('trains-list');
            const trainFilter = document.getElementById('train-filter');
            const selectAllTrains = document.getElementById('select-all-trains');
            const deselectAllTrains = document.getElementById('deselect-all-trains');
            
            // Добавляем переменные для ФИО диспетчера
            const dispatcherNameInput = document.getElementById('dispatcher-name');
            const periodDispatcherNameInput = document.getElementById('period-dispatcher-name');
            const printPeriodReportBtn = document.getElementById('print-period-report-btn');
            
            // Добавляем переменную для кнопки сброса выбора поездов
            const paramResetDate = document.getElementById('param-reset-date');
            
            // Переменные для управления операциями
            const operationsManagementBtn = document.getElementById('operations-management-btn');
            const operationsManagementModal = document.getElementById('operations-management-modal');
            const closeOperationsManagement = document.getElementById('close-operations-management');
            const operationsListManagement = document.getElementById('operations-list-management');
            const applyOperationsVisibility = document.getElementById('apply-operations-visibility');
            
            // Текущая выбранная дата
            let selectedDate = new Date();
            
            // Массив выбранных поездов (изначально все)
            let selectedParams = Array.from({length: 15}, (_, i) => i + 1);
            
            // Переменные для хранения данных отчета за период
            let currentPeriodReportData = [];
            let currentPeriodReportStats = {};
            let currentPeriodStartDate = null;
            let currentPeriodEndDate = null;
            
            // Автоматическое сохранение в базу данных
            let saveQueue = [];
            let isSaving = false;
            let retryCount = 0;
            const MAX_RETRIES = 3;
            
            // Полные названия поездов
            const paramNames = [
                "№ 303/304 Москва-Сухум",
                "№149/120 Москва-Саранск",
                "№145/146 Москва-Назрань",
                "№71/72 Москва-Чебоксары",
                "№119/150 Москва-Казань",
                "№155/156 Москва-Анапаа",
                "№273/274 Моска-Казань",
                "№151/152-265/266 Москва-Анапа",
                "№739/740 Москва-Воронеж",
                "________________________",
                "________________________",
                "________________________",
                "________________________",                
                "________________________",
                "________________________"
            ];
            
            // Названия операций (24 операции с новой операцией)
            const operationNames = [
                "Подача на пути формирования",
                "Маневровая работа",
                "Очистка подвагонного оборудования", // Новая операция
                "Осмотр на брак",
                "Откачка ЭЧТК",
                "Выработка брака",
                "Наружная обмывка кузова",
                "Текущий отцепочный ремонт",
                "Формирование",
                "ТО-1 цех РВО",
                "ТО-1 ТРК",
                "ТО-1 Экотол",
                "ТО-1 Максима-Телеком",
                "Внутренняя уборка",
                "Экипировка бельем",
                "Экипировка товарами",
                "Экипировка сан.-гигиен. приборами",
                "Экипировка водой",
                "Экипировка углем",
                "Заряд 380В",
                "Подключение 3000В",
                "УЗОТ",
                "Приемочный контроль ПДК",
                "Опробование тормозов от маневрового локомотива"
            ];
            
            // ID операций, которые можно отметить как "не проводившиеся"
            const skippableOperations = [3, 5, 7, 8, 18, 19, 20]; // Добавлена новая операция (ID 3)
            
            // Массив manualOperationTimes 24x15 с индивидуальным временем для каждой операции и поезда
            const manualOperationTimes = [
                // Подача на пути формирования (15 поездов)
                [
                    {start: "05:14", end: "05:35"}, {start: "05:21", end: "05:53"}, {start: "06:26", end: "06:50"},
                    {start: "10:51", end: "11:09"}, {start: "14:55", end: "15:15"}, {start: "16:40", end: "17:00"},
                    {start: "06:04", end: "06:26"}, {start: "20:33", end: "20:51"}, {start: "00:10", end: "00:22"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Маневровая работа
                [
                    {start: "08:30", end: "09:30"}, {start: "06:25", end: "07:23"}, {start: "09:45", end: "10:45"},
                    {start: "12:28", end: "13:28"}, {start: "18:30", end: "19:00"}, {start: "17:20", end: "18:20"},
                    {start: "08:00", end: "09:00"}, {start: "23:10", end: "00:10"}, {start: "00:15", end: "01:15"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Новая операция: Очистка подвагонного оборудования
                [
                    {start: "09:35", end: "10:15"}, {start: "07:28", end: "08:10"}, {start: "10:50", end: "11:30"},
                    {start: "13:33", end: "14:15"}, {start: "19:05", end: "19:45"}, {start: "18:25", end: "19:05"},
                    {start: "09:05", end: "09:45"}, {start: "00:15", end: "00:55"}, {start: "01:20", end: "02:00"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Осмотр на брак
                [
                    {start: "09:36", end: "10:20"}, {start: "07:23", end: "08:40"}, {start: "07:50", end: "08:30"},
                    {start: "11:30", end: "14:25"}, {start: "16:00", end: "17:00"}, {start: "18:26", end: "18:56"},
                    {start: "06:43", end: "07:23"}, {start: "20:51", end: "21:41"}, {start: "01:22", end: "02:13"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],   
                // Откачка ЭЧТК
                [
                    {start: "09:30", end: "10:40"}, {start: "07:23", end: "11:00"}, {start: "10:45", end: "12:25"},
                    {start: "11:00", end: "12:28"}, {start: "15:21", end: "18:30"}, {start: "18:20", end: "21:00"},
                    {start: "06:20", end: "09:20"}, {start: "21:00", end: "05:00"}, {start: "01:15", end: "05:00"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Выработка брака
                [
                    {start: "11:01", end: "13:01"}, {start: "10:20", end: "11:20"}, {start: "12:00", end: "13:00"},
                    {start: "15:20", end: "16:20"}, {start: "17:40", end: "18:40"}, {start: "19:31", end: "20:30"},
                    {start: "08:00", end: "09:00"}, {start: "23:02", end: "01:02"}, {start: "03:25", end: "04:25"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Наружная обмывка кузова
                [
                    {start: "06:11", end: "13:20"}, {start: "06:11", end: "13:20"}, {start: "09:58", end: "21:28"},
                    {start: "11:23", end: "22:19"}, {start: "19:00", end: "22:55"}, {start: "17:35", end: "21:38"},
                    {start: "09:00", end: "15:00"}, {start: "22:21", end: "09:15"}, {start: "00:12", end: "06:22"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Текущий отцепочный ремонт
                [
                    {start: "11:01", end: "13:01"}, {start: "10:20", end: "11:20"}, {start: "12:00", end: "13:00"},
                    {start: "15:20", end: "16:20"}, {start: "17:40", end: "18:40"}, {start: "18:16", end: "19:16"},
                    {start: "08:00", end: "08:00"}, {start: "00:00", end: "23:59"}, {start: "03:35", end: "04:35"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Формирование
                [
                    {start: "11:01", end: "13:01"}, {start: "10:20", end: "11:20"}, {start: "12:00", end: "13:00"},
                    {start: "15:20", end: "16:20"}, {start: "17:40", end: "18:40"}, {start: "18:16", end: "19:16"},
                    {start: "08:00", end: "08:00"}, {start: "00:00", end: "23:59"}, {start: "03:35", end: "04:35"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // ТО-1 цех РВO
                [
                    {start: "09:30", end: "16:50"}, {start: "08:00", end: "12:30"}, {start: "13:00", end: "19:30"},
                    {start: "14:13", end: "22:05"}, {start: "15:31", end: "22:05"}, {start: "18:26", end: "21:30"},
                    {start: "09:00", end: "14:00"}, {start: "23:30", end: "09:30"}, {start: "01:15", end: "04:35"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // ТО-1 ТРК
                [
                    {start: "09:30", end: "16:50"}, {start: "08:00", end: "12:30"}, {start: "13:00", end: "19:05"},
                    {start: "14:13", end: "19:30"}, {start: "18:40", end: "22:05"}, {start: "18:26", end: "21:30"},
                    {start: "09:00", end: "14:00"}, {start: "03:10", end: "09:05"}, {start: "01:33", end: "04:35"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // ТО-1 Экотол
                [
                    {start: "09:30", end: "16:50"}, {start: "05:59", end: "13:15"}, {start: "06:46", end: "19:30"},
                    {start: "13:00", end: "22:05"}, {start: "15:21", end: "22:30"}, {start: "18:26", end: "21:30"},
                    {start: "09:00", end: "14:00"}, {start: "21:05", end: "09:05"}, {start: "22:46", end: "06:18"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // ТО-1 Максима-Телеком
                [
                    {start: "09:30", end: "16:50"}, {start: "08:00", end: "12:30"}, {start: "06:50", end: "19:30"},
                    {start: "11:09", end: "22:05"}, {start: "18:40", end: "22:05"}, {start: "18:26", end: "21:30"},
                    {start: "09:00", end: "14:00"}, {start: "21:05", end: "09:05"}, {start: "00:28", end: "05:00"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Внутренняя уборка
                [
                    {start: "13:05", end: "16:50"}, {start: "09:00", end: "13:15"}, {start: "16:00", end: "22:05"},
                    {start: "16:05", end: "20:05"}, {start: "17:30", end: "23:25"}, {start: "18:26", end: "22:05"},
                    {start: "09:00", end: "14:00"}, {start: "01:02", end: "09:50"}, {start: "02:30", end: "06:58"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Экипировка бельем
                [
                    {start: "09:30", end: "16:50"}, {start: "08:00", end: "12:30"}, {start: "17:00", end: "18:00"},
                    {start: "19:30", end: "20:30"}, {start: "21:30", end: "22:30"}, {start: "18:26", end: "21:30"},
                    {start: "09:00", end: "14:00"}, {start: "01:10", end: "05:10"}, {start: "01:15", end: "2:45"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Экипировка товарами
                [
                    {start: "09:30", end: "16:50"}, {start: "08:00", end: "12:30"}, {start: "16:00", end: "18:00"},
                    {start: "18:00", end: "19:00"}, {start: "19:00", end: "21:00"}, {start: "19:00", end: "21:00"},
                    {start: "09:00", end: "14:00"}, {start: "21:00", end: "23:00"}, {start: "04:30", end: "05:30"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Экипировка саню-гигиен. приборами 
                [
                    {start: "09:30", end: "16:50"}, {start: "08:00", end: "12:30"}, {start: "16:00", end: "18:00"},
                    {start: "18:00", end: "19:00"}, {start: "19:00", end: "21:00"}, {start: "19:00", end: "21:00"},
                    {start: "09:00", end: "14:00"}, {start: "21:00", end: "23:00"}, {start: "01:15", end: "02:45"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Экипировка водой 
                [
                    {start: "13:05", end: "14:25"}, {start: "10:30", end: "12:10"}, {start: "15:40", end: "17:11"},
                    {start: "16:00", end: "17:00"}, {start: "19:00", end: "21:00"}, {start: "18:26", end: "19:36"},
                    {start: "09:00", end: "14:00"}, {start: "20:51", end: "21:41"}, {start: "01:15", end: "02:45"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Экипировка углем 
                [
                    {start: "13:05", end: "14:25"}, {start: "11:00", end: "12:30"}, {start: "15:40", end: "17:11"},
                    {start: "23:58", end: "23:59"}, {start: "19:00", end: "21:00"}, {start: "18:26", end: "19:36"},
                    {start: "09:00", end: "14:00"}, {start: "01:00", end: "02:00"}, {start: "23:58", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Заряд 380В 
                [
                    {start: "13:01", end: "17:30"}, {start: "08:00", end: "13:15"}, {start: "13:00", end: "19:15"},
                    {start: "23:58", end: "23:59"}, {start: "18:40", end: "23:05"}, {start: "18:26", end: "21:30"},
                    {start: "09:00", end: "14:00"}, {start: "01:10", end: "09:05"}, {start: "23:58", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Подключение 3000В
                [
                    {start: "14:30", end: "17:00"}, {start: "12:15", end: "13:15"}, {start: "23:58", end: "23:59"},
                    {start: "19:05", end: "21:00"}, {start: "20:05", end: "22:00"}, {start: "23:58", end: "23:59"},
                    {start: "23:58", end: "23:59"}, {start: "01:02", end: "08:00"}, {start: "02:15", end: "06:00"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // УЗОТ
                [
                    {start: "14:00", end: "14:40"}, {start: "11:20", end: "12:00"}, {start: "18:12", end: "18:52"},
                    {start: "18:20", end: "19:00"}, {start: "19:20", end: "20:00"}, {start: "20:50", end: "21:30"},
                    {start: "14:20", end: "15:00"}, {start: "08:20", end: "08:40"}, {start: "04:35", end: "05:15"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ],
                // Приемочный контроль ПДК
                [
                    {start: "16:50", end: "17:50"}, {start: "12:30", end: "13:30"}, {start: "19:05", end: "20:05"},
                    {start: "20:05", end: "21:05"}, {start: "22:05", end: "23:05"}, {start: "21:05", end: "22:05"},
                    {start: "14:00", end: "15:00"}, {start: "08:05", end: "09:05"}, {start: "05:00", end: "06:00"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ], 
                 // Опробование тормозов от маневрового локомотива
                [
                    {start: "18:10", end: "18:49"}, {start: "13:56", end: "14:30"}, {start: "22:05", end: "22:29"},
                    {start: "22:55", end: "23:55"}, {start: "23:25", end: "23:44"}, {start: "22:14", end: "22:39"},
                    {start: "15:04", end: "15:33"}, {start: "09:50", end: "10:16"}, {start: "06:58", end: "07:24"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"},
                    {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}, {start: "00:00", end: "23:59"}
                ]
            ];
            
            // Функции для работы с выбором поездов по датам
            function getSelectedParamsStorageKey(date) {
                const dateKey = new Date(date);
                dateKey.setHours(0, 0, 0, 0);
                return `selected_params_${dateKey.getTime()}`;
            }

            function loadSelectedParams() {
                const storageKey = getSelectedParamsStorageKey(selectedDate);
                const savedParams = localStorage.getItem(storageKey);
                
                if (savedParams) {
                    selectedParams = JSON.parse(savedParams);
                } else {
                    // Если для этой даты нет сохраненных параметров, выбираем все поезда
                    selectedParams = Array.from({length: 15}, (_, i) => i + 1);
                }
                
                updateCheckboxesFromSelectedParams();
                updateSelectButtonText();
            }

            function updateCheckboxesFromSelectedParams() {
                paramItems.forEach(item => {
                    const itemId = parseInt(item.id.split('-')[1]);
                    item.checked = selectedParams.includes(itemId);
                });
                updateSelectAllState();
            }

            function updateSelectedParams() {
                selectedParams = [];
                paramItems.forEach(item => {
                    if (item.checked) {
                        selectedParams.push(parseInt(item.id.split('-')[1]));
                    }
                });
                
                const storageKey = getSelectedParamsStorageKey(selectedDate);
                localStorage.setItem(storageKey, JSON.stringify(selectedParams));
                
                updateSelectButtonText();
            }

            function updateSelectButtonText() {
                if (selectedParams.length === 15) {
                    paramSelectBtn.innerHTML = '<i class="fas fa-cog"></i> Все поезда';
                } else if (selectedParams.length === 0) {
                    paramSelectBtn.innerHTML = '<i class="fas fa-cog"></i> Нет поездов';
                } else if (selectedParams.length <= 3) {
                    const selectedNames = selectedParams.map(id => paramNames[id-1].split(' ')[0]);
                    paramSelectBtn.innerHTML = '<i class="fas fa-cog"></i> ' + selectedNames.join(', ');
                } else {
                    paramSelectBtn.innerHTML = '<i class="fas fa-cog"></i> Выбрано: ' + selectedParams.length + ' поездов';
                }
            }
            
            // Инициализация даты
            function initDate() {
                const today = new Date();
                const formattedDate = formatDateForInput(today);
                dateSelector.value = formattedDate;
                selectedDate = today;
                updateSelectedDateDisplay();
            }
            
            // Обновление отображения выбранной дата
            function updateSelectedDateDisplay() {
                selectedDateDisplay.textContent = formatDateForDisplay(selectedDate);
            }
            
            // Форматирование даты для input[type="date"]
            function formatDateForInput(date) {
                const year = date.getFullYear();
                const month = (date.getMonth() + 1).toString().padStart(2, '0');
                const day = date.getDate().toString().padStart(2, '0');
                return `${year}-${month}-${day}`;
            }
            
            // Форматирование дата для отображения
            function formatDateForDisplay(date) {
                return date.toLocaleDateString('ru-RU', {
                    day: '2-digit',
                    month: '2-digit',
                    year: 'numeric',
                    weekday: 'long'
                });
            }
            
            // Текущее время
            function updateDateTime() {
                const now = new Date();
                currentTimeElement.textContent = now.toLocaleTimeString('ru-RU');
                printDateElement.textContent = 'Отчет сформирован: ' + now.toLocaleString('ru-RU');
                updateStatuses();
            }
            
            // Обработчик изменения даты
            dateSelector.addEventListener('change', function() {
                const dateParts = this.value.split('-');
                selectedDate = new Date(dateParts[0], dateParts[1] - 1, dateParts[2]);
                updateSelectedDateDisplay();
                
                // Загружаем сохраненные параметры для новой даты
                loadSelectedParams();
                
                renderTable();
                showNotification(`Загружены данные на дату: ${formatDateForDisplay(selectedDate)}`);
            });
            
            // Обработчик кнопки "Сегодня"
            todayBtn.addEventListener('click', function() {
                selectedDate = new Date();
                dateSelector.value = formatDateForInput(selectedDate);
                updateSelectedDateDisplay();
                
                // Загружаем сохраненные параметры для сегодняшней даты
                loadSelectedParams();
                
                renderTable();
                showNotification('Загружены данные на сегодняшнюю дату');
            });
            
            // Переключение видимости dropdown
            paramSelectBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                paramDropdown.style.display = paramDropdown.style.display === 'block' ? 'none' : 'block';
            });
            
            // Закрытие dropdown при клике вне его
            document.addEventListener('click', function(e) {
                if (!paramDropdown.contains(e.target) && e.target !== paramSelectBtn) {
                    paramDropdown.style.display = 'none';
                }
            });
            
            // Обработчик для "Инвертировать выбор"
            paramSelectAll.addEventListener('click', function() {
                const allChecked = Array.from(paramItems).every(item => item.checked);
                paramItems.forEach(item => {
                    item.checked = !allChecked;
                });
                paramAll.checked = !allChecked;
                updateSelectedParams();
            });
            
            // Обработчик для "Все поезда"
            paramAll.addEventListener('change', function() {
                const isChecked = this.checked;
                paramItems.forEach(item => {
                    item.checked = isChecked;
                });
                updateSelectedParams();
            });
            
            // Обработчики для отдельных параметров
            paramItems.forEach(item => {
                item.addEventListener('change', function() {
                    updateSelectAllState();
                    updateSelectedParams();
                });
            });
            
            // Обновление состояния "Выбрать все"
            function updateSelectAllState() {
                const allChecked = Array.from(paramItems).every(item => item.checked);
                const someChecked = Array.from(paramItems).some(item => item.checked);
                paramAll.checked = allChecked;
                paramAll.indeterminate = someChecked && !allChecked;
            }
            
            // Обработчик кнопки сброса выбора для текущей даты
            paramResetDate.addEventListener('click', function() {
                // Удаляем сохраненные параметры для текущей даты
                const storageKey = getSelectedParamsStorageKey(selectedDate);
                localStorage.removeItem(storageKey);
                
                // Выбираем все поезда по умолчанию
                selectedParams = Array.from({length: 15}, (_, i) => i + 1);
                updateCheckboxesFromSelectedParams();
                updateSelectedParams();
                
                showNotification('Выбор поездов сброшен для текущей даты');
            });
            
            // Применение фильтра
            paramApply.addEventListener('click', function() {
                paramDropdown.style.display = 'none';
                
                // Сохраняем текущий выбор
                updateSelectedParams();
                
                renderTable();
                
                if (selectedParams.length === 15) {
                    showNotification('Отображаются все поезда');
                } else {
                    const selectedNames = selectedParams.map(id => paramNames[id-1]);
                    showNotification(`Отображаются поезда: ${selectedNames.join(', ')}`);
                }
            });
            
            // Функция для сохранения состояния "не проводилась"
            function saveSkipStatus(operationId, parameterId, isSkipped) {
                const dateKey = new Date(selectedDate);
                dateKey.setHours(0, 0, 0, 0);
                const storageKey = `operation_${dateKey.getTime()}_${operationId}_${parameterId}_skipped`;
                
                if (isSkipped) {
                    localStorage.setItem(storageKey, 'true');
                } else {
                    localStorage.removeItem(storageKey);
                }
            }

            // Функция для проверки, пропущена ли операция
            function isOperationSkipped(operationId, parameterId) {
                const dateKey = new Date(selectedDate);
                dateKey.setHours(0, 0, 0, 0);
                const storageKey = `operation_${dateKey.getTime()}_${operationId}_${parameterId}_skipped`;
                return localStorage.getItem(storageKey) === 'true';
            }

           // Генерация тестовых данных для выбранной даты - ИСПРАВЛЕННАЯ ВЕРСИЯ
            function generateOperationsData() {
                const operations = [];
                
                // Нормализуем дату для ключа
                const dateKey = new Date(selectedDate);
                dateKey.setHours(0, 0, 0, 0);
                
                for (let i = 1; i <= 24; i++) {
                    const operation = {
                        id: i,
                        name: operationNames[i-1],
                        parameters: []
                    };
                    operations.push(operation);
                }
                
                operations.forEach(operation => {
                    paramNames.forEach((paramName, paramIndex) => {
                        // Используем ручное время из массива manualOperationTimes
                        const manualTime = manualOperationTimes[operation.id-1][paramIndex];
                        const [startHours, startMinutes] = manualTime.start.split(':').map(Number);
                        const [endHours, endMinutes] = manualTime.end.split(':').map(Number);
                        
                        const planStart = new Date(selectedDate);
                        planStart.setHours(startHours, startMinutes, 0, 0);
                        
                        const planEnd = new Date(selectedDate);
                        planEnd.setHours(endHours, endMinutes, 0, 0);
                        
                        // Для времени, переходящего на следующий день
                        if (endHours < startHours) {
                            planEnd.setDate(planEnd.getDate() + 1);
                        }
                        
                        // ИСПРАВЛЕННЫЙ КЛЮЧ ДЛЯ ПОИСКА
                        const storageKeyStart = `operation_${dateKey.getTime()}_${operation.id}_${paramIndex+1}_start`;
                        const storageKeyEnd = `operation_${dateKey.getTime()}_${operation.id}_${paramIndex+1}_end`;
                        
                        const savedDataStart = localStorage.getItem(storageKeyStart);
                        const savedDataEnd = localStorage.getItem(storageKeyEnd);
                        let factStart = null;
                        let factEnd = null;
                        
                        if (savedDataStart) {
                            factStart = new Date(parseInt(savedDataStart));
                            // Корректируем дату, если она отличается от выбранной
                            if (factStart.toDateString() !== selectedDate.toDateString()) {
                                factStart.setFullYear(selectedDate.getFullYear());
                                factStart.setMonth(selectedDate.getMonth());
                                factStart.setDate(selectedDate.getDate());
                            }
                        }
                        
                        if (savedDataEnd) {
                            factEnd = new Date(parseInt(savedDataEnd));
                            // Корректируем дату, если она отличается от выбранной
                            if (factEnd.toDateString() !== selectedDate.toDateString()) {
                                factEnd.setFullYear(selectedDate.getFullYear());
                                factEnd.setMonth(selectedDate.getMonth());
                                factEnd.setDate(selectedDate.getDate());
                            }
                        }

                        // Проверяем, отмечена ли операция как пропущенная
                        const skipped = isOperationSkipped(operation.id, paramIndex+1);
                        
                        // Если операция пропущена, очищаем фактические времена
                        if (skipped) {
                            factStart = null;
                            factEnd = null;
                        }
                        
                        operation.parameters.push({
                            id: paramIndex + 1,
                            name: paramName,
                            planStart: planStart,
                            planEnd: planEnd,
                            factStart: factStart,
                            factEnd: factEnd,
                            duration: Math.round((planEnd - planStart) / (1000 * 60)),
                            skipped: skipped
                        });
                    });
                });
                
                return operations;
            }
            
            // Обновленная функция сохранения данных с учетом операций через сутки
            function saveOperationData(operationId, parameterId, factStart, factEnd) {
                // Нормализуем дату (убираем время) для корректного ключа
                const dateKey = new Date(selectedDate);
                dateKey.setHours(0, 0, 0, 0);
                
                const storageKeyStart = `operation_${dateKey.getTime()}_${operationId}_${parameterId}_start`;
                const storageKeyEnd = `operation_${dateKey.getTime()}_${operationId}_${parameterId}_end`;
                
                // Для операций, которые переходят через сутки, корректируем дату окончания
                if (factStart && factEnd) {
                    // Если время окончания меньше времени начала, значит операция перешла на следующий день
                    if (factEnd < factStart) {
                        // Создаем копию даты окончания и добавляем 1 день
                        const correctedFactEnd = new Date(factEnd);
                        correctedFactEnd.setDate(correctedFactEnd.getDate() + 1);
                        factEnd = correctedFactEnd;
                    }
                }
                
                if (factStart) {
                    localStorage.setItem(storageKeyStart, factStart.getTime().toString());
                } else {
                    localStorage.removeItem(storageKeyStart);
                }
                
                if (factEnd) {
                    localStorage.setItem(storageKeyEnd, factEnd.getTime().toString());
                } else {
                    localStorage.removeItem(storageKeyEnd);
                }
                
                // Автоматическое сохранение в базу данных
                const operationData = {
                    timestamp: dateKey.getTime(),
                    operation_id: operationId,
                    param_id: parameterId,
                    fact_start: factStart ? factStart.getTime() : null,
                    fact_end: factEnd ? factEnd.getTime() : null,
                    skipped: false
                };
                
                scheduleSave('operation', operationData);
                
                // Для отладки
                console.log('Сохранено:', {
                    date: dateKey.toLocaleDateString('ru-RU'),
                    operationId,
                    parameterId,
                    factStart: factStart ? formatTime(factStart) : null,
                    factEnd: factEnd ? formatTime(factEnd) : null
                });
            }
            
            // Заполнение таблицы
            function renderTable() {
                const operations = generateOperationsData();
                const thead = scheduleTable.querySelector('thead');
                const tbody = scheduleTable.querySelector('tbody');
                const hiddenOperations = getHiddenOperations();
                
                // Очищаем таблицу
                while (thead.rows.length > 1) {
                    thead.deleteRow(1);
                }
                tbody.innerHTML = '';
                
                // Создаем заголовки для операций
                const headerRow = thead.insertRow();
                headerRow.innerHTML = '<th class="parameters-header"><button class="param-select-btn" id="param-select-btn"><i class="fas fa-cog"></i> Выбрать поезд</button></th>';
                
                // Добавляем заголовки операций (только не скрытые)
                operations.forEach(operation => {
                    if (hiddenOperations.includes(operation.id)) return;
                    
                    const th = document.createElement('th');
                    th.className = 'operation-header';
                    th.textContent = operation.name;
                    
                    // Добавляем иконку скрытия при наведении
                    th.title = 'Щелкните для скрытия/показа операции';
                    th.style.cursor = 'pointer';
                    th.addEventListener('click', function() {
                        toggleOperationVisibility(operation.id);
                    });
                    
                    headerRow.appendChild(th);
                });
                
                // Создаем строки для параметров
                paramNames.forEach((paramName, paramIndex) => {
                    if (!selectedParams.includes(paramIndex + 1)) return;
                    
                    const row = tbody.insertRow();
                    const paramCell = row.insertCell();
                    paramCell.className = 'parameters-column';
                    paramCell.textContent = paramName;
                    
                    // Добавляем ячейки для каждой операции (только не скрытые)
                    operations.forEach(operation => {
                        if (hiddenOperations.includes(operation.id)) return;
                        
                        const operationData = operation.parameters[paramIndex];
                        const cell = row.insertCell();
                        cell.className = 'time-cell';
                        
                        // Добавляем data-атрибуты для легкого поиска ячейки
                        cell.dataset.operationId = operation.id;
                        cell.dataset.paramId = operationData.id;
                        
                        // Добавляем отображение планового времени
                        const planTimeDiv = document.createElement('div');
                        planTimeDiv.className = 'plan-time';
                        planTimeDiv.textContent = `План: ${formatTime(operationData.planStart)} - ${formatTime(operationData.planEnd)}`;
                        cell.appendChild(planTimeDiv);
                        
                        // Контейнер для полей ввода
                        const inputGroup = document.createElement('div');
                        inputGroup.className = 'time-input-group';
                        
                        // Поле ввода для фактического времени начала
                        const startInputContainer = document.createElement('div');
                        startInputContainer.className = 'time-input-wrapper';
                        
                        const startLabel = document.createElement('div');
                        startLabel.className = 'time-input-label';
                        startLabel.textContent = 'Нач.:';
                        startInputContainer.appendChild(startLabel);
                        
                        const factStartInput = document.createElement('input');
                        factStartInput.type = 'time';
                        factStartInput.className = 'time-input';
                        factStartInput.value = operationData.factStart ? formatTimeForInput(operationData.factStart) : '';
                        factStartInput.dataset.operationId = operation.id;
                        factStartInput.dataset.paramId = operationData.id;
                        factStartInput.dataset.type = 'start';
                        startInputContainer.appendChild(factStartInput);
                        
                        inputGroup.appendChild(startInputContainer);
                        
                        // Поле ввода для фактического времени окончания
                        const endInputContainer = document.createElement('div');
                        endInputContainer.className = 'time-input-wrapper';
                        
                        const endLabel = document.createElement('div');
                        endLabel.className = 'time-input-label';
                        endLabel.textContent = 'Кон.:';
                        endInputContainer.appendChild(endLabel);
                        
                        const factEndInput = document.createElement('input');
                        factEndInput.type = 'time';
                        factEndInput.className = 'time-input';
                        factEndInput.value = operationData.factEnd ? formatTimeForInput(operationData.factEnd) : '';
                        factEndInput.dataset.operationId = operation.id;
                        factEndInput.dataset.paramId = operationData.id;
                        factEndInput.dataset.type = 'end';
                        endInputContainer.appendChild(factEndInput);
                        
                        inputGroup.appendChild(endInputContainer);
                        
                        cell.appendChild(inputGroup);
                        
                        // Добавляем чекбокс "Операция не проводилась" для определенных операций
                        if (skippableOperations.includes(operation.id)) {
                            const skipContainer = document.createElement('div');
                            skipContainer.className = 'skip-checkbox-container';
                            
                            const skipCheckbox = document.createElement('input');
                            skipCheckbox.type = 'checkbox';
                            skipCheckbox.className = 'skip-checkbox';
                            skipCheckbox.id = `skip-${operation.id}-${operationData.id}`;
                            skipCheckbox.checked = operationData.skipped || false;
                            
                            const skipLabel = document.createElement('label');
                            skipLabel.className = 'skip-label';
                            skipLabel.htmlFor = `skip-${operation.id}-${operationData.id}`;
                            skipLabel.textContent = 'Операция не проводилась';
                            
                            skipContainer.appendChild(skipCheckbox);
                            skipContainer.appendChild(skipLabel);
                            cell.appendChild(skipContainer);
                            
                            // Обработчик изменения чекбокса
                            skipCheckbox.addEventListener('change', function() {
                                const isSkipped = this.checked;
                                saveSkipStatus(operation.id, operationData.id, isSkipped);
                                
                                // Если операция помечена как пропущенная, очищаем поля ввода
                                if (isSkipped) {
                                    factStartInput.value = '';
                                    factEndInput.value = '';
                                    saveOperationData(operation.id, operationData.id, null, null);
                                }
                                
                                // Делаем поля ввода активными/неактивными
                                factStartInput.disabled = isSkipped;
                                factEndInput.disabled = isSkipped;
                                
                                updateStatuses();
                                showNotification(isSkipped ? 'Операция отмечена как не проводившаяся' : 'Операция активна');
                            });
                            
                            // При первоначальной загрузке устанавливаем состояние полей ввода
                            factStartInput.disabled = operationData.skipped;
                            factEndInput.disabled = operationData.skipped;
                        }
                        
                        // Обработчики изменений для полей ввода
                        const handleTimeChange = function() {
                            const operationId = this.dataset.operationId;
                            const paramId = this.dataset.paramId;
                            const type = this.dataset.type;
                            let timeValue = null;
                            
                            // Преобразуем введенное время в объект Date
                            if (this.value) {
                                timeValue = new Date(selectedDate);
                                const [hours, minutes] = this.value.split(':').map(Number);
                                timeValue.setHours(hours, minutes, 0, 0);
                            }
                            
                            // Получаем текущие значения
                            const startInput = document.querySelector(`.time-input[data-operation-id="${operationId}"][data-param-id="${paramId}"][data-type="start"]`);
                            const endInput = document.querySelector(`.time-input[data-operation-id="${operationId}"][data-param-id="${paramId}"][data-type="end"]`);
                            
                            const factStart = startInput.value ? new Date(selectedDate) : null;
                            const factEnd = endInput.value ? new Date(selectedDate) : null;
                            
                            if (factStart && startInput.value) {
                                const [startHours, startMinutes] = startInput.value.split(':').map(Number);
                                factStart.setHours(startHours, startMinutes, 0, 0);
                            }
                            
                            if (factEnd && endInput.value) {
                                const [endHours, endMinutes] = endInput.value.split(':').map(Number);
                                factEnd.setHours(endHours, endMinutes, 0, 0);
                            }
                            
                            saveOperationData(operationId, paramId, factStart, factEnd);
                            updateStatuses();
                            showNotification('Фактическое время обновлено');
                        };
                        
                        factStartInput.addEventListener('change', handleTimeChange);
                        factEndInput.addEventListener('change', handleTimeChange);
                        
                        // Добавляем класс статуса
                        updateCellStatus(cell, operationData);
                    });
                });
                
                updateStatuses();
            }
            
            // Исправленная функция обновления статуса ячейки
            function updateCellStatus(cell, operationData, now = new Date()) {
                // Сбрасываем все статусы
                cell.classList.remove('status-normal', 'status-in-progress', 'status-overdue', 'status-invalid', 'status-completed-late', 'print-violation', 'status-skipped', 'status-no-data', 'status-not-completed');
                
                // Сбрасываем статус невалидности и рамки нарушений для полей ввода
                const inputs = cell.querySelectorAll('.time-input');
                inputs.forEach(input => {
                    input.classList.remove('invalid', 'violation-border-start', 'violation-border-end', 'violation-border-both');
                });

                // Если операция пропущена, устанавливаем соответствующий статус и выходим
                if (operationData.skipped) {
                    cell.classList.add('status-skipped');
                    return;
                }
                
                // Проверяем нарушения
                const violations = checkForViolation({id: 0}, operationData);
                
                // Обрабатываем нарушения (подсвечиваем только соответствующие поля ввода)
                violations.forEach(violation => {
                    if (violation.type === "Начата раньше") {
                        const startInput = cell.querySelector('.time-input[data-type="start"]');
                        if (startInput) {
                            startInput.classList.add('violation-border-start');
                        }
                    }
                    else if (violation.type === "Завершена позже") {
                        const endInput = cell.querySelector('.time-input[data-type="end"]');
                        if (endInput) {
                            endInput.classList.add('violation-border-end');
                        }
                    }
                    else if (violation.type === "Неверное время") {
                        const inputs = cell.querySelectorAll('.time-input');
                        inputs.forEach(input => input.classList.add('violation-border-both'));
                    }
                });
                
                // Упрощенная логика определения статуса
                
                const planEnd = new Date(operationData.planEnd);
                const factStart = operationData.factStart;
                const factEnd = operationData.factEnd;
                const currentTime = new Date(now);
                
                // Корректируем время для операций, переходящих через сутки
                if (operationData.planEnd < operationData.planStart) {
                    planEnd.setDate(planEnd.getDate() + 1);
                }
                
                // СЛУЧАЙ 1: Если операция завершена (есть время окончания)
                if (factEnd) {
                    cell.classList.add('status-normal');
                    return;
                }
                
                // СЛУЧАЙ 2: Если операция начата, но не завершена
                if (factStart && !factEnd) {
                    if (currentTime > planEnd) {
                        // Время вышло, операция не завершена - МИГАНИЕ КРАСНЫМ
                        cell.classList.add('status-not-completed');
                    } else {
                        // В процессе выполнения - мигание желтым
                        cell.classList.add('status-in-progress');
                    }
                    return;
                }
                
                // СЛУЧАЙ 3: Если операция не начата
                if (!factStart && !factEnd) {
                    if (currentTime > planEnd) {
                        // Время вышло и операция не начата - МИГАНИЕ КРАСНЫМ
                        cell.classList.add('status-no-data');
                    } else if (currentTime >= operationData.planStart && currentTime <= planEnd) {
                        // Операция должна быть в процессе, но не начата - мигание желтым
                        cell.classList.add('status-in-progress');
                    } else {
                        // Операция еще не должна начинаться
                        cell.classList.add('status-normal');
                    }
                    return;
                }
                
                // По умолчанию - нормальный статус
                cell.classList.add('status-normal');
            }
            
            // Обновление статусов ячеек
            function updateStatuses() {
                const operations = generateOperationsData();
                const now = new Date();
                
                operations.forEach(operation => {
                    operation.parameters.forEach(operationData => {
                        if (!selectedParams.includes(operationData.id)) return;
                        
                        const cell = document.querySelector(`.time-cell[data-operation-id="${operation.id}"][data-param-id="${operationData.id}"]`);
                        if (cell) {
                            updateCellStatus(cell, operationData, now);
                        }
                    });
                });
            }
            
            // Форматирование времени для отображения
            function formatTime(date) {
                return date.toLocaleTimeString('ru-RU', { hour: '2-digit', minute: '2-digit' });
            }
            
            // Форматирование времени для input[type="time"]
            function formatTimeForInput(date) {
                const hours = date.getHours().toString().padStart(2, '0');
                const minutes = date.getMinutes().toString().padStart(2, '0');
                return `${hours}:${minutes}`;
            }
            
            // Показать уведомление
            function showNotification(message) {
                notificationElement.textContent = message;
                notificationElement.style.display = 'block';
                
                setTimeout(() => {
                    notificationElement.style.display = 'none';
                }, 3000);
            }
            
            // Функция для открытия модального окна с отчетом
            generateReportBtn.addEventListener('click', function() {
                generateViolationReport();
                reportModal.style.display = 'block';
            });
            
            // Функция для закрытия модального окна
            closeReport.addEventListener('click', function() {
                reportModal.style.display = 'none';
            });
            
            // Закрытие модального окна при клике вне его области
            window.addEventListener('click', function(event) {
                if (event.target === reportModal) {
                    reportModal.style.display = 'none';
                }
            });
            
            // Функция для генерации отчета о нарушениях (обрабатывает все нарушения)
            function generateViolationReport() {
                const operations = generateOperationsData();
                const violations = [];
                
                // Устанавливаем дату отчета
                reportDate.textContent = formatDateForDisplay(selectedDate);
                
                // Поиск всех нарушений
                operations.forEach(operation => {
                    operation.parameters.forEach(param => {
                        if (!selectedParams.includes(param.id)) return;
                        
                        // Пропускаем операции, отмеченные как "не проводившиеся"
                        if (param.skipped) return;
                        
                        const violationsList = checkForViolation(operation, param);
                        violationsList.forEach(violation => {
                            violations.push({
                                train: param.name,
                                operation: operation.name,
                                planTime: `${formatTime(param.planStart)} - ${formatTime(param.planEnd)}`,
                                factTime: param.factStart && param.factEnd ? 
                                    `${formatTime(param.factStart)} - ${formatTime(param.factEnd)}` : 
                                    (param.factStart ? `${formatTime(param.factStart)} - не завершено` : 'не начато'),
                                violationType: violation.type,
                                violationDescription: violation.description,
                                operationId: operation.id,
                                paramId: param.id
                            });
                        });
                    });
                });
                
                // Отображение отчета
                if (violations.length === 0) {
                    reportData.innerHTML = `
                        <div class="no-violations">
                            <i class="fas fa-check-circle" style="font-size: 48px; margin-bottom: 15px;"></i>
                            <h3>Нарушений не обнаружено!</h3>
                            <p>Все технологические операции выполнены согласно плану-графику.</p>
                        </div>
                    `;
                } else {
                    let reportHTML = `
                        <table class="report-table">
                            <thead>
                                <tr>
                                    <th>Поезд</th>
                                    <th>Операция</th>
                                    <th>Плановое время</th>
                                    <th>Фактическое время</th>
                                    <th>Тип нарушения</th>
                                    <th>Описание нарушения</th>
                                    <th>Причина нарушения</th>
                                </tr>
                            </thead>
                            <tbody>
                    `;
                    
                    violations.forEach(violation => {
                        const storageKey = `violation_reason_${selectedDate.getTime()}_${violation.operationId}_${violation.paramId}`;
                        const savedReason = localStorage.getItem(storageKey) || '';
                        
                        let violationClass = '';
                        if (violation.violationType.includes('раньше')) {
                            violationClass = 'violation-early';
                        } else if (violation.violationType.includes('позже')) {
                            violationClass = 'violation-late';
                        } else if (violation.violationType.includes('Неверное')) {
                            violationClass = 'violation-invalid';
                        } else {
                            violationClass = 'violation-missing';
                        }
                        
                        reportHTML += `
                            <tr>
                                <td>${violation.train}</td>
                                <td>${violation.operation}</td>
                                <td>${violation.planTime}</td>
                                <td>${violation.factTime}</td>
                                <td><span class="violation-type ${violationClass}">${violation.violationType}</span></td>
                                <td>${violation.violationDescription}</td>
                                <td>
                                    <textarea class="reason-input" data-operation-id="${violation.operationId}" 
                                        data-param-id="${violation.paramId}" placeholder="Укажите причину нарушения...">${savedReason}</textarea>
                                </td>
                            </tr>
                        `;
                    });
                    
                    reportHTML += `</tbody></table>`;
                    reportData.innerHTML = reportHTML;
                }
            }
            
            // Функция для проверки нарушений
            function checkForViolation(operation, param, forPeriodReport = false) {
                const violations = [];
                
                // Если операция пропущена, нарушений нет
                if (param.skipped) {
                    return violations;
                }
                
                // Для отчета за период используем дату операции, а не текущее время
                const now = forPeriodReport ? (param.factEnd || param.planEnd) : new Date();
                
                // Неверное время (окончание раньше начала)
                if (param.factStart && param.factEnd) {
                    let factStart = new Date(param.factStart);
                    let factEnd = new Date(param.factEnd);
                    
                    // Корректируем для операций через сутки
                    if (factEnd < factStart) {
                        factEnd.setDate(factEnd.getDate() + 1);
                    }
                    
                    if (factEnd < factStart) {
                        violations.push({
                            type: "Неверное время",
                            description: "Время окончания операции раньше времени начала"
                        });
                    }
                }
                
                // Для отчета за период проверяем только фактические данные
                if (forPeriodReport) {
                    if (!param.factStart && !param.factEnd) {
                        return violations;
                    }
                    
                    // Создаем копии дат для корректного сравнения с учетом перехода через сутки
                    const planStart = new Date(param.planStart);
                    const planEnd = new Date(param.planEnd);
                    const factStart = param.factStart ? new Date(param.factStart) : null;
                    const factEnd = param.factEnd ? new Date(param.factEnd) : null;
                    
                    // Корректируем время для операций, переходящих через сутки
                    if (planEnd < planStart) {
                        planEnd.setDate(planEnd.getDate() + 1);
                    }
                    
                    if (factEnd && factStart && factEnd < factStart) {
                        factEnd.setDate(factEnd.getDate() + 1);
                    }
                    
                    // Операция начата раньше планового времени
                    if (param.factStart && param.factStart < param.planStart) {
                        const diffMinutes = Math.round((param.planStart - param.factStart) / (1000 * 60));
                        violations.push({
                            type: "Начата раньше",
                            description: `Операция начата на ${diffMinutes} минут раньше плана`
                        });
                    }
                    
                    // Операция завершена позже планового времени
                    if (param.factEnd && param.factEnd > param.planEnd) {
                        const diffMinutes = Math.round((param.factEnd - param.planEnd) / (1000 * 60));
                        violations.push({
                            type: "Завершена позже",
                            description: `Операция завершена на ${diffMinutes} минут позже плана`
                        });
                    }
                    
                    return violations;
                }
                
                // Логика для основного интерфейса (не для отчета за период)
                
                // Создаем копии дат для корректного сравнения с учетом перехода через сутки
                const planStart = new Date(param.planStart);
                const planEnd = new Date(param.planEnd);
                const factStart = param.factStart ? new Date(param.factStart) : null;
                const factEnd = param.factEnd ? new Date(param.factEnd) : null;
                
                // Корректируем время для операций, переходящих через сутки
                if (planEnd < planStart) {
                    planEnd.setDate(planEnd.getDate() + 1);
                }
                
                if (factEnd && factStart && factEnd < factStart) {
                    factEnd.setDate(factEnd.getDate() + 1);
                }
                
                // Операция не начата, но время планового окончания уже прошло
                if (!param.factStart && now > param.planEnd) {
                    violations.push({
                        type: "Не начата",
                        description: "Операция не была начата вовремя"
                    });
                }
                
                // Операция начата, но не завершена после планового времени окончания
                if (param.factStart && !param.factEnd && now > param.planEnd) {
                    violations.push({
                        type: "Не завершена",
                        description: "Операция начата, но не завершена вовремя"
                    });
                }
                
                // Операция начата раньше планового времени
                if (param.factStart && param.factStart < param.planStart) {
                    const diffMinutes = Math.round((param.planStart - param.factStart) / (1000 * 60));
                    violations.push({
                        type: "Начата раньше",
                        description: `Операция начата на ${diffMinutes} минут раньше плана`
                    });
                }
                
                // Операция завершена позже планового времени
                if (param.factEnd && param.factEnd > param.planEnd) {
                    const diffMinutes = Math.round((param.factEnd - param.planEnd) / (1000 * 60));
                    violations.push({
                        type: "Завершена позже",
                        description: `Операция завершена на ${diffMinutes} минут позже плана`
                    });
                }
                
                return violations;
            }
            
            // Модифицированная функция сохранения причин нарушений
            function saveViolationReason(operationId, parameterId, reason) {
                const dateKey = new Date(selectedDate);
                dateKey.setHours(0, 0, 0, 0);
                const storageKey = `violation_reason_${dateKey.getTime()}_${operationId}_${parameterId}`;
                
                if (reason) {
                    localStorage.setItem(storageKey, reason);
                    
                    // Автоматическое сохранение в базу данных
                    const violationData = {
                        timestamp: dateKey.getTime(),
                        operation_id: operationId,
                        param_id: parameterId,
                        reason: reason
                    };
                    
                    scheduleSave('violation_reason', violationData);
                } else {
                    localStorage.removeItem(storageKey);
                }
            }
            
            // Сохранение причин нарушений - ОБНОВЛЕННАЯ ВЕРСИЯ
            saveReportBtn.addEventListener('click', function() {
                const reasonInputs = document.querySelectorAll('.reason-input');
                let savedCount = 0;
                
                reasonInputs.forEach(input => {
                    const operationId = input.dataset.operationId;
                    const paramId = input.dataset.paramId;
                    const reason = input.value.trim();
                    
                    if (reason) {
                        saveViolationReason(operationId, paramId, reason);
                        savedCount++;
                    }
                });
                
                showNotification(`Сохранено причин нарушений: ${savedCount}`);
            });
            
            // Печать отчета о нарушениях с ФИО диспетчера
            printReportBtn.addEventListener('click', function() {
                const dispatcherName = dispatcherNameInput.value || 'Не указано';
                
                // Создаем копию содержимого отчета для печати
                const reportClone = reportData.cloneNode(true);
                
                // Заменяем textarea на обычный текст для печати
                const textareas = reportClone.querySelectorAll('textarea.reason-input');
                textareas.forEach(textarea => {
                    const reasonText = textarea.value || ''; // Если поле пустое, используем пустую строку
                    const textNode = document.createTextNode(reasonText);
                    const container = document.createElement('div');
                    container.className = 'print-reason';
                    container.appendChild(textNode);
                    textarea.parentNode.replaceChild(container, textarea);
                });
                
                const printContent = `
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>Анализ нарушений технологического процесса</title>
                        <style>
                            body { 
                                font-family: Arial, sans-serif; 
                                margin: 20px; 
                                font-size: 12px;
                            }
                            h1 { 
                                text-align: center; 
                                color: #2c3e50; 
                                margin-bottom: 10px;
                            }
                            .report-date { 
                                text-align: center; 
                                margin-bottom: 20px; 
                                font-size: 14px;
                                font-weight: bold;
                            }
                            .dispatcher-info {
                                text-align: right;
                                margin-bottom: 20px;
                            }
                            table { 
                                width: 100%; 
                                border-collapse: collapse; 
                                margin-bottom: 20px;
                                font-size: 10px;
                            }
                            th, td { 
                                border: 1px solid #ddd; 
                                padding: 6px; 
                                text-align: left; 
                            }
                            th { 
                                background-color: #3498db; 
                                color: white; 
                                font-weight: bold;
                            }
                            tr:nth-child(even) { 
                                background-color: #f2f2f2; 
                            }
                            .violation-type { 
                                padding: 3px 6px; 
                                border-radius: 3px; 
                                font-size: 9px; 
                                font-weight: bold;
                            }
                            .violation-late { background-color: #ffcccc; color: #c0392b; }
                            .violation-early { background-color: #fff9c6; color: #d35400; }
                            .violation-missing { background-color: #e6e6e6; color: #7f8c8d; }
                            .violation-invalid { background-color: #ffcccc; color: #c0392b; }
                            .print-reason { 
                                max-width: 200px; 
                                font-size: 9px;
                                /* Убираем все стили текстового поля */
                                border: none !important;
                                background: none !important;
                                padding: 0 !important;
                                margin: 0 !important;
                                box-shadow: none !important;
                                font-family: inherit;
                                color: inherit;
                                min-height: auto !important;
                                resize: none !important;
                                outline: none !important;
                            }
                            .print-signature {
                                margin-top: 40px;
                                padding-top: 20px;
                                border-top: 1px solid #000;
                            }
                            .signature-line {
                                display: flex;
                                justify-content: space-between;
                                margin-top: 30px;
                            }
                            .signature-field {
                                width: 45%;
                                border-bottom: 1px solid #000;
                                padding-bottom: 3px;
                                text-align: center;
                            }
                            @media print {
                                @page { 
                                    size: landscape;
                                    margin: 0.5cm;
                                }
                                body { 
                                    font-size: 10px;
                                    margin: 0;
                                    width: 100%;
                                }
                                table {
                                    page-break-inside: auto;
                                }
                                tr {
                                    page-break-inside: avoid;
                                    page-break-after: auto;
                                }
                                .print-reason {
                                    /* Дополнительные гарантии для печати */
                                    border: none !important;
                                    background: transparent !important;
                                    box-shadow: none !important;
                                    outline: none !important;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <h1>Анализ нарушений технологического процесса</h1>
                        <div class="report-date">Дата: ${formatDateForDisplay(selectedDate)}</div>
                        <div class="dispatcher-info">Диспетчер: <strong>${dispatcherName}</strong></div>
                        ${reportClone.innerHTML}
                        <div class="print-signature">
                            <div class="signature-line">
                                <div class="signature-field">Диспетчер: ${dispatcherName}</div>
                                <div class="signature-field">Дата: ${new Date().toLocaleDateString('ru-RU')}</div>
                            </div>
                        </div>
                    </body>
                    </html>
                `;
                
                const printWindow = window.open('', '_blank');
                printWindow.document.write(printContent);
                printWindow.document.close();
                
                setTimeout(() => {
                    printWindow.print();
                }, 500);
            });
            
            // Инициализация дат для отчета за период
            function initPeriodDates() {
                const today = new Date();
                const weekAgo = new Date();
                weekAgo.setDate(today.getDate() - 7);
                
                periodStartDate.value = formatDateForInput(weekAgo);
                periodEndDate.value = formatDateForInput(today);
            }
            
            // Заполнение списка операций
            function populateOperationsList() {
                operationsList.innerHTML = '';
                
                operationNames.forEach((operation, index) => {
                    const operationId = index + 1;
                    const label = document.createElement('label');
                    label.className = 'operation-label';
                    
                    const checkbox = document.createElement('input');
                    checkbox.type = 'checkbox';
                    checkbox.className = 'operation-checkbox';
                    checkbox.value = operationId;
                    checkbox.checked = true;
                    
                    const text = document.createTextNode(operation);
                    
                    label.appendChild(checkbox);
                    label.appendChild(text);
                    operationsList.appendChild(label);
                });
            }
            
            // Заполнение списка поездов для отчета за период
            function populateTrainsList() {
                trainsList.innerHTML = '';
                
                paramNames.forEach((train, index) => {
                    const trainId = index + 1;
                    const label = document.createElement('label');
                    label.className = 'train-label';
                    
                    const checkbox = document.createElement('input');
                    checkbox.type = 'checkbox';
                    checkbox.className = 'train-checkbox';
                    checkbox.value = trainId;
                    checkbox.checked = true;
                    
                    const text = document.createTextNode(train);
                    
                    label.appendChild(checkbox);
                    label.appendChild(text);
                    trainsList.appendChild(label);
                });
            }
            
            // Фильтрация операций
            operationFilter.addEventListener('input', function() {
                const filterText = this.value.toLowerCase();
                const labels = operationsList.querySelectorAll('.operation-label');
                
                labels.forEach(label => {
                    const text = label.textContent.toLowerCase();
                    if (text.includes(filterText)) {
                        label.style.display = 'flex';
                    } else {
                        label.style.display = 'none';
                    }
                });
            });
            
            // Фильтрация поездов
            trainFilter.addEventListener('input', function() {
                const filterText = this.value.toLowerCase();
                const labels = trainsList.querySelectorAll('.train-label');
                
                labels.forEach(label => {
                    const text = label.textContent.toLowerCase();
                    if (text.includes(filterText)) {
                        label.style.display = 'flex';
                    } else {
                        label.style.display = 'none';
                    }
                });
            });
            
            // Выбрать все операции
            selectAllOperations.addEventListener('click', function() {
                const checkboxes = operationsList.querySelectorAll('.operation-checkbox');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = true;
                });
            });
            
            // Снять выбор со всех операций
            deselectAllOperations.addEventListener('click', function() {
                const checkboxes = operationsList.querySelectorAll('.operation-checkbox');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
            });
            
            // Выбрать все поезда
            selectAllTrains.addEventListener('click', function() {
                const checkboxes = trainsList.querySelectorAll('.train-checkbox');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = true;
                });
            });
            
            // Снять выбор со всех поездов
            deselectAllTrains.addEventListener('click', function() {
                const checkboxes = trainsList.querySelectorAll('.train-checkbox');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
            });
            
            // Получение выбранных операций
            function getSelectedOperations() {
                const checkboxes = operationsList.querySelectorAll('.operation-checkbox:checked');
                return Array.from(checkboxes).map(checkbox => parseInt(checkbox.value));
            }
            
            // Получение выбранных поездов
            function getSelectedTrains() {
                const checkboxes = trainsList.querySelectorAll('.train-checkbox:checked');
                return Array.from(checkboxes).map(checkbox => parseInt(checkbox.value));
            }
            
            // Генерация отчета за период
            generatePeriodReport.addEventListener('click', function() {
                const startDate = new Date(periodStartDate.value);
                const endDate = new Date(periodEndDate.value);
                const selectedOperations = getSelectedOperations();
                const selectedTrains = getSelectedTrains(); // Добавляем выбор поездов
                
                if (!startDate || !endDate) {
                    showNotification('Выберите период для отчета');
                    return;
                }
                
                if (startDate > endDate) {
                    showNotification('Дата начала не может быть позже даты окончания');
                    return;
                }
                
                if (selectedOperations.length === 0) {
                    showNotification('Выберите хотя бы одну операцию для анализа');
                    return;
                }
                
                if (selectedTrains.length === 0) {
                    showNotification('Выберите хотя бы один поезд для анализа');
                    return;
                }
                
                generatePeriodReportData(startDate, endDate, selectedOperations, selectedTrains);
            });
            
            // ОБНОВЛЕННАЯ функция получения данных операций для конкретной даты
            function getOperationsForDate(date, selectedOperations, selectedTrains) {
                const operations = [];
                
                // Сначала проверяем, есть ли вообще данные по выбранным поездам в эту дату
                const trainsWithData = new Set();
                
                // Проходим по всем операциям и поездам для поиска данных
                selectedOperations.forEach(operationId => {
                    paramNames.forEach((paramName, paramIndex) => {
                        const trainId = paramIndex + 1;
                        if (!selectedTrains.includes(trainId)) return;
                        
                        const operationData = getOperationData(date, operationId, trainId);
                        if (operationData && (operationData.factStart || operationData.factEnd || operationData.skipped)) {
                            trainsWithData.add(trainId);
                        }
                    });
                });
                
                // Теперь собираем данные только для поездов, у которых есть данные
                selectedOperations.forEach(operationId => {
                    paramNames.forEach((paramName, paramIndex) => {
                        const trainId = paramIndex + 1;
                        if (!selectedTrains.includes(trainId) || !trainsWithData.has(trainId)) return;
                        
                        const operationData = getOperationData(date, operationId, trainId);
                        if (operationData) {
                            // Получаем сохраненную причину нарушения
                            const dateKey = new Date(date);
                            dateKey.setHours(0, 0, 0, 0);
                            const violationReasonKey = `violation_reason_${dateKey.getTime()}_${operationId}_${trainId}`;
                            const savedReason = localStorage.getItem(violationReasonKey) || '';
                            
                            // Определяем статус операции
                            const status = getOperationStatus(operationData);
                            
                            // Проверяем нарушения только для операций с фактическими данными
                            const violations = (operationData.factStart || operationData.factEnd) && !operationData.skipped ? 
                                checkForViolation({id: operationId}, operationData, true) : [];
                            
                            // Создаем запись для отчета только если есть фактические данные или операция пропущена
                            if (operationData.factStart || operationData.factEnd || operationData.skipped) {
                                operations.push({
                                    date: new Date(date),
                                    operationId: operationId,
                                    operationName: operationNames[operationId - 1],
                                    train: paramName,
                                    planStart: operationData.planStart,
                                    planEnd: operationData.planEnd,
                                    factStart: operationData.factStart,
                                    factEnd: operationData.factEnd,
                                    status: status,
                                    violations: violations,
                                    violationReason: savedReason,
                                    skipped: operationData.skipped,
                                    hasData: !!(operationData.factStart || operationData.factEnd || operationData.skipped)
                                });
                            }
                        }
                    });
                });
                
                return operations;
            }
            
            // Обновленная функция получения данных операции с учетом операций через сутки
            function getOperationData(date, operationId, paramId) {
                // Нормализуем дату для ключа
                const dateKey = new Date(date);
                dateKey.setHours(0, 0, 0, 0);
                
                const storageKeyStart = `operation_${dateKey.getTime()}_${operationId}_${paramId}_start`;
                const storageKeyEnd = `operation_${dateKey.getTime()}_${operationId}_${paramId}_end`;
                
                const savedDataStart = localStorage.getItem(storageKeyStart);
                const savedDataEnd = localStorage.getItem(storageKeyEnd);
                
                // Получаем плановое время из manualOperationTimes
                const manualTime = manualOperationTimes[operationId-1][paramId-1];
                const [startHours, startMinutes] = manualTime.start.split(':').map(Number);
                const [endHours, endMinutes] = manualTime.end.split(':').map(Number);
                
                const planStart = new Date(date);
                planStart.setHours(startHours, startMinutes, 0, 0);
                
                const planEnd = new Date(date);
                planEnd.setHours(endHours, endMinutes, 0, 0);
                
                // Для времени, переходящего на следующий день
                if (endHours < startHours) {
                    planEnd.setDate(planEnd.getDate() + 1);
                }
                
                let factStart = null;
                let factEnd = null;
                
                if (savedDataStart) {
                    factStart = new Date(parseInt(savedDataStart));
                    // Корректируем дату, если она отличается от выбранной
                    if (factStart.toDateString() !== date.toDateString()) {
                        factStart.setFullYear(date.getFullYear());
                        factStart.setMonth(date.getMonth());
                        factStart.setDate(date.getDate());
                    }
                }
                
                if (savedDataEnd) {
                    factEnd = new Date(parseInt(savedDataEnd));
                    // Корректируем дату, если она отличается от выбранной
                    if (factEnd.toDateString() !== date.toDateString()) {
                        factEnd.setFullYear(date.getFullYear());
                        factEnd.setMonth(date.getMonth());
                        factEnd.setDate(date.getDate());
                    }
                }
                
                // Проверяем, отмечена ли операция как пропущенная
                const skipped = isOperationSkipped(operationId, paramId);
                
                return {
                    planStart: planStart,
                    planEnd: planEnd,
                    factStart: factStart,
                    factEnd: factEnd,
                    skipped: skipped
                };
            }
            
            // Функция определения статуса операции
            function getOperationStatus(operationData) {
                if (operationData.skipped) {
                    return "Не проводилась";
               
                }
                
                if (!operationData.factStart && !operationData.factEnd) {
                    return "Не начата";
                }
                
                if (operationData.factStart && !operationData.factEnd) {
                    return "В процессе";
                }
                
                if (operationData.factStart && operationData.factEnd) {
                    return "Завершена";
                }
                
                return "Неизвестно";
            }
            
            // ОБНОВЛЕННАЯ функция генерации данных отчета за период
            function generatePeriodReportData(startDate, endDate, selectedOperations, selectedTrains) {
                const allOperations = [];
                let currentDate = new Date(startDate);
                
                // Собираем данные за все дни периода
                while (currentDate <= endDate) {
                    const operationsForDay = getOperationsForDate(currentDate, selectedOperations, selectedTrains);
                    allOperations.push(...operationsForDay);
                    currentDate.setDate(currentDate.getDate() + 1);
                }
                
                // Сохраняем данные для отображения
                currentPeriodReportData = allOperations;
                currentPeriodStartDate = startDate;
                currentPeriodEndDate = endDate;
                
                // Генерируем статистику
                generatePeriodStats(allOperations);
                
                // Отображаем результаты
                displayPeriodReportResults(allOperations);
                
                // Показываем кнопку печати
                printPeriodReportBtn.style.display = 'block';
            }
            
            // ОБНОВЛЕННАЯ функция генерации статистики для отчета за период
            function generatePeriodStats(operations) {
                const stats = {
                    total: 0, // Только операции с данными
                    completed: 0,
                    completedOnTime: 0,
                    completedWithViolations: 0,
                    inProgress: 0,
                    skipped: 0
                };
                
                operations.forEach(op => {
                    // Учитываем только операции с данными
                    if (!op.hasData) return;
                    
                    stats.total++;
                    
                    if (op.status === "Завершена") {
                        stats.completed++;
                        // Проверяем, была ли операция завершена без нарушений
                        if (op.violations.length === 0) {
                            stats.completedOnTime++;
                        } else {
                            stats.completedWithViolations++;
                        }
                    } else if (op.status === "В процессе") {
                        stats.inProgress++;
                    } else if (op.status === "Не проводилась") {
                        stats.skipped++;
                    }
                });
                
                // Добавляем расчет процентов
                stats.percentCompleted = stats.total > 0 ? ((stats.completed / stats.total) * 100).toFixed(1) : 0;
                stats.percentCompletedOnTime = stats.total > 0 ? ((stats.completedOnTime / stats.total) * 100).toFixed(1) : 0;
                stats.percentCompletedWithViolations = stats.total > 0 ? ((stats.completedWithViolations / stats.total) * 100).toFixed(1) : 0;
                stats.percentInProgress = stats.total > 0 ? ((stats.inProgress / stats.total) * 100).toFixed(1) : 0;
                stats.percentSkipped = stats.total > 0 ? ((stats.skipped / stats.total) * 100).toFixed(1) : 0;
                
                currentPeriodReportStats = stats;
            }
            
            // ОБНОВЛЕННАЯ функция отображения результатов отчета за период
            function displayPeriodReportResults(operations) {
                let resultsHTML = '';
                
                // Фильтруем операции - оставляем только те, у которых есть данные
                const operationsWithData = operations.filter(op => op.hasData);
                
                // Отображаем статистику ТОЛЬКО для операций с данными
                resultsHTML += `
                    <div class="period-stats">
                        <div class="stat-card">
                            <div class="stat-title">Всего операций с данными</div>
                            <div class="stat-value">${currentPeriodReportStats.total}</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-title">Выполнено в срок</div>
                            <div class="stat-value stat-completed">${currentPeriodReportStats.completedOnTime}</div>
                            <div class="stat-percent">${currentPeriodReportStats.percentCompletedOnTime}%</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-title">Выполнено с нарушениями</div>
                            <div class="stat-value stat-overdue">${currentPeriodReportStats.completedWithViolations}</div>
                            <div class="stat-percent">${currentPeriodReportStats.percentCompletedWithViolations}%</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-title">В процессе</div>
                            <div class="stat-value stat-in-progress">${currentPeriodReportStats.inProgress}</div>
                            <div class="stat-percent">${currentPeriodReportStats.percentInProgress}%</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-title">Не проводились</div>
                            <div class="stat-value stat-skipped">${currentPeriodReportStats.skipped}</div>
                            <div class="stat-percent">${currentPeriodReportStats.percentSkipped}%</div>
                        </div>
                    </div>
                `;
                
                if (operationsWithData.length === 0) {
                    resultsHTML += `
                        <div class="no-data-message">
                            <i class="fas fa-info-circle" style="font-size: 48px; margin-bottom: 15px;"></i>
                            <h3>Нет данных за выбранный период</h3>
                            <p>По выбранным поездам и операциям не найдено данных за указанный период.</p>
                        </div>
                    `;
                } else {
                    // Создаем таблицу только с операциями, у которых есть данные
                    resultsHTML += `
                        <h3 style="margin: 20px 0 10px 0; color: #2c3e50;">Детализация выполненных операций</h3>
                        <table class="period-report-table">
                            <thead>
                                <tr>
                                    <th>Дата</th>
                                    <th>Поезд</th>
                                    <th>Операция</th>
                                    <th>Плановое время</th>
                                    <th>Фактическое время</th>
                                    <th>Статус</th>
                                    <th>Нарушения</th>
                                    <th>Причина нарушения</th>
                                </tr>
                            </thead>
                            <tbody>
                    `;
                    
                    operationsWithData.forEach(op => {
                        const formattedDate = op.date.toLocaleDateString('ru-RU');
                        const planTime = `${formatTime(op.planStart)} - ${formatTime(op.planEnd)}`;
                        const factTime = op.factStart && op.factEnd ? 
                            `${formatTime(op.factStart)} - ${formatTime(op.factEnd)}` : 
                            (op.factStart ? `${formatTime(op.factStart)} - не завершено` : 'не начато');
                        
                        let statusClass = '';
                        if (op.status === "Завершена") {
                            statusClass = op.violations.length > 0 ? 'badge-overdue' : 'badge-completed';
                        } else if (op.status === "В процессе") {
                            statusClass = 'badge-in-progress';
                        } else if (op.status === "Не проводилась") {
                            statusClass = 'badge-skipped';
                        } else {
                            statusClass = 'badge-not-started';
                        }
                        
                        let statusText = op.status;
                        if (op.status === "Завершена" && op.violations.length > 0) {
                            statusText = "Завершена с нарушениями";
                        } else if (op.status === "Завершена" && op.violations.length === 0) {
                            statusText = "Завершена в срок";
                        }
                        
                        let violationsText = '';
                        if (op.violations && op.violations.length > 0) {
                            violationsText = op.violations.map(v => `${v.type}: ${v.description}`).join('; ');
                        }
                        
                        resultsHTML += `
                            <tr>
                                <td>${formattedDate}</td>
                                <td>${op.train}</td>
                                <td>${op.operationName}</td>
                                <td>${planTime}</td>
                                <td>${factTime}</td>
                                <td><span class="status-badge ${statusClass}">${statusText}</span></td>
                                <td>${violationsText}</td>
                                <td>${op.violationReason}</td>
                            </tr>
                        `;
                    });
                    
                    resultsHTML += `</tbody></table>`;
                }
                
                periodReportResults.innerHTML = resultsHTML;
            }
            
            // ОБНОВЛЕННАЯ функция печати отчета за период с процентами
            printPeriodReportBtn.addEventListener('click', function() {
                const dispatcherName = periodDispatcherNameInput.value || 'Не указано';
                
                // Создаем копию содержимого отчета для печати
                const reportClone = periodReportResults.cloneNode(true);
                
                // Убираем ссылки на классы, которые могут мешать печати
                const badges = reportClone.querySelectorAll('.status-badge');
                badges.forEach(badge => {
                    badge.classList.remove('status-badge');
                    badge.style.cssText = 'padding: 2px 6px; border-radius: 3px; font-size: 10px;';
                });
                
                const printContent = `
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>Отчет за период</title>
                        <style>
                            body { 
                                font-family: Arial, sans-serif; 
                                margin: 20px; 
                                font-size: 12px;
                            }
                            h1 { 
                                text-align: center; 
                                color: #2c3e50; 
                                margin-bottom: 10px;
                            }
                            .report-period { 
                                text-align: center; 
                                margin-bottom: 20px; 
                                font-size: 14px;
                                font-weight: bold;
                            }
                            .dispatcher-info {
                                text-align: right;
                                margin-bottom: 20px;
                            }
                            .period-stats {
                                display: grid;
                                grid-template-columns: repeat(5, 1fr);
                                gap: 10px;
                                margin-bottom: 20px;
                            }
                            .stat-card {
                                background: #f8f9fa;
                                padding: 10px;
                                border-radius: 8px;
                                text-align: center;
                                border: 1px solid #e4e7eb;
                            }
                            .stat-title {
                                font-size: 10px;
                                color: #6c757d;
                                margin-bottom: 5px;
                            }
                            .stat-value {
                                font-size: 18px;
                                font-weight: bold;
                                margin: 5px 0;
                            }
                            .stat-percent {
                                font-size: 12px;
                                font-weight: 600;
                                margin-top: 2px;
                            }
                            .stat-completed { color: #27ae60; }
                            .stat-overdue { color: #e74c3c; }
                            .stat-in-progress { color: #f39c12; }
                            .stat-skipped { color: #7f8c8d; }
                            table { 
                                width: 100%; 
                                border-collapse: collapse; 
                                margin-bottom: 20px;
                                font-size: 9px;
                            }
                            th, td { 
                                border: 1px solid #ddd; 
                                padding: 5px; 
                                text-align: left; 
                                word-wrap: break-word;
                            }
                            th { 
                                background-color: #3498db; 
                                color: white; 
                                font-weight: bold;
                            }
                            tr:nth-child(even) { 
                                background-color: #f2f2f2; 
                            }
                            .badge-completed { background-color: #d5f4e6; color: #27ae60; }
                            .badge-in-progress { background-color: #fdebd0; color: #f39c12; }
                            .badge-skipped { background-color: #e5e7e9; color: #7f8c8d; }
                            .print-signature {
                                margin-top: 40px;
                                padding-top: 20px;
                                border-top: 1px solid #000;
                            }
                            .signature-line {
                                display: flex;
                                justify-content: space-between;
                                margin-top: 30px;
                            }
                            .signature-field {
                                width: 45%;
                                border-bottom: 1px solid #000;
                                padding-bottom: 3px;
                                text-align: center;
                            }
                            @media print {
                                @page { 
                                    size: landscape;
                                    margin: 0.5cm;
                                }
                                body { 
                                    font-size: 8px;
                                    margin: 0;
                                    width: 100%;
                                }
                                .period-stats {
                                    grid-template-columns: repeat(3, 1fr);
                                }
                                table {
                                    page-break-inside: auto;
                                    font-size: 7px;
                                }
                                tr {
                                    page-break-inside: avoid;
                                    page-break-after: auto;
                                }
                                th, td {
                                    padding: 3px;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <h1>Отчет за период</h1>
                        <div class="report-period">Период: ${formatDateForDisplay(currentPeriodStartDate)} - ${formatDateForDisplay(currentPeriodEndDate)}</div>
                        <div class="dispatcher-info">Диспетчер: <strong>${dispatcherName}</strong></div>
                        ${reportClone.innerHTML}
                        <div class="print-signature">
                            <div class="signature-line">
                                <div class="signature-field">Диспетчер: ${dispatcherName}</div>
                                <div class="signature-field">Дата: ${new Date().toLocaleDateString('ru-RU')}</div>
                            </div>
                        </div>
                    </body>
                    </html>
                `;
                
                const printWindow = window.open('', '_blank');
                printWindow.document.write(printContent);
                printWindow.document.close();
                
                setTimeout(() => {
                    printWindow.print();
                }, 500);
            });
            
            // Открытие модального окна отчета за период
            periodReportBtn.addEventListener('click', function() {
                periodReportModal.style.display = 'block';
                initPeriodDates();
                populateOperationsList();
                populateTrainsList();
            });
            
            // Закрытие модального окна отчета за период
            closePeriodReport.addEventListener('click', function() {
                periodReportModal.style.display = 'none';
            });
            
            // Закрытие модального окна при клике вне его области
            window.addEventListener('click', function(event) {
                if (event.target === periodReportModal) {
                    periodReportModal.style.display = 'none';
                }
            });
            
            // Функции для управления операциями
            
            // Функция для получения скрытых операций
            function getHiddenOperations() {
                const hidden = localStorage.getItem('hidden_operations');
                return hidden ? JSON.parse(hidden) : [];
            }
            
            // Функция для сохранения скрытых операций
            function saveHiddenOperations(hiddenOperations) {
                localStorage.setItem('hidden_operations', JSON.stringify(hiddenOperations));
            }
            
            // Функция для переключения видимости операции
            function toggleOperationVisibility(operationId) {
                const hiddenOperations = getHiddenOperations();
                const index = hiddenOperations.indexOf(operationId);
                
                if (index > -1) {
                    // Операция была скрыта - показываем
                    hiddenOperations.splice(index, 1);
                    showNotification(`Операция "${operationNames[operationId-1]}" показана`);
                } else {
                    // Операция была видима - скрываем
                    hiddenOperations.push(operationId);
                    showNotification(`Операция "${operationNames[operationId-1]}" скрыта`);
                }
                
                saveHiddenOperations(hiddenOperations);
                renderTable();
            }
            
            // Функция для создания интерфейса управления операциями
            function createOperationsManagementModal() {
                const modal = document.getElementById('operations-management-modal');
                
                // Заполняем список операций
                const operationsList = document.getElementById('operations-list-management');
                const hiddenOperations = getHiddenOperations();
                
                operationsList.innerHTML = '';
                
                operationNames.forEach((operationName, index) => {
                    const operationId = index + 1;
                    const isHidden = hiddenOperations.includes(operationId);
                    
                    const operationItem = document.createElement('div');
                    operationItem.className = 'operation-item';
                    operationItem.style.cssText = `
                        display: flex;
                        align-items: center;
                        padding: 10px;
                        margin: 5px 0;
                        background: ${isHidden ? '#f8f9fa' : 'white'};
                        border: 1px solid #e4e7eb;
                        border-radius: 8px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    `;
                    
                    operationItem.innerHTML = `
                        <input type="checkbox" id="op-${operationId}" ${isHidden ? '' : 'checked'} 
                               style="margin-right: 10px; transform: scale(1.2);">
                        <label for="op-${operationId}" style="flex: 1; cursor: pointer; font-size: 14px;">
                            ${operationName}
                        </label>
                        <span style="color: ${isHidden ? '#e74c3c' : '#27ae60'}; font-size: 12px; font-weight: 600;">
                            ${isHidden ? 'Скрыта' : 'Видима'}
                        </span>
                    `;
                    
                    // Обработчик переключения видимости
                    const checkbox = operationItem.querySelector('input');
                    checkbox.addEventListener('change', function() {
                        toggleOperationVisibility(operationId);
                        // Обновляем отображение элемента
                        operationItem.style.background = this.checked ? 'white' : '#f8f9fa';
                        const statusSpan = operationItem.querySelector('span');
                        statusSpan.textContent = this.checked ? 'Видима' : 'Скрыта';
                        statusSpan.style.color = this.checked ? '#27ae60' : '#e74c3c';
                    });
                    
                    operationsList.appendChild(operationItem);
                });
                
                // Закрытие модального окна
                document.getElementById('close-operations-management').addEventListener('click', function() {
                    modal.style.display = 'none';
                });
                
                // Применение изменений
                document.getElementById('apply-operations-visibility').addEventListener('click', function() {
                    modal.style.display = 'none';
                    renderTable();
                });
                
                return modal;
            }
            
            // Функция для отображения модального окна управления операциями
            function showOperationsManagementModal() {
                let modal = document.getElementById('operations-management-modal');
                if (!modal) {
                    modal = createOperationsManagementModal();
                } else {
                    // Обновляем список операций
                    createOperationsManagementModal();
                }
                modal.style.display = 'block';
            }
            
            // Обработчик кнопки управления операциями
            operationsManagementBtn.addEventListener('click', function() {
                showOperationsManagementModal();
            });
            
            // Автоматическое сохранение в базу данных
            
            // Функция для отправки данных на сервер
            async function saveToDatabase(data) {
                try {
                    const response = await fetch('save_to_db.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(data)
                    });
                    
                    const result = await response.json();
                    
                    if (result.success) {
                        console.log('Data saved to database:', result.message);
                        retryCount = 0; // Сброс счетчика повторов при успехе
                        return true;
                    } else {
                        console.error('Failed to save data:', result.message);
                        return false;
                    }
                } catch (error) {
                    console.error('Error saving to database:', error);
                    return false;
                }
            }
            
            // Функция для обработки очереди сохранения
            async function processSaveQueue() {
                if (isSaving || saveQueue.length === 0) return;
                
                isSaving = true;
                
                while (saveQueue.length > 0) {
                    const data = saveQueue[0];
                    const success = await saveToDatabase(data);
                    
                    if (success) {
                        saveQueue.shift(); // Удаляем успешно сохраненный элемент
                        retryCount = 0;
                    } else {
                        retryCount++;
                        if (retryCount >= MAX_RETRIES) {
                            console.error('Max retries reached, removing from queue:', data);
                            saveQueue.shift();
                            retryCount = 0;
                        } else {
                            // Ждем перед повторной попыткой
                            await new Promise(resolve => setTimeout(resolve, 1000 * retryCount));
                        }
                    }
                }
                
                isSaving = false;
            }
            
            // Функция для добавления операции в очередь сохранения
            function scheduleSave(type, data) {
                saveQueue.push({
                    type: type,
                    data: data,
                    timestamp: Date.now()
                });
                
                // Запускаем обработку очереди с небольшой задержкой
                setTimeout(processSaveQueue, 100);
            }
            
            // Модифицированная функция для сохранения состояния "не проводилась"
            function saveSkipStatus(operationId, parameterId, isSkipped) {
                const dateKey = new Date(selectedDate);
                dateKey.setHours(0, 0, 0, 0);
                const storageKey = `operation_${dateKey.getTime()}_${operationId}_${parameterId}_skipped`;
                
                if (isSkipped) {
                    localStorage.setItem(storageKey, 'true');
                    
                    // Автоматическое сохранение в базу данных
                    const operationData = {
                        timestamp: dateKey.getTime(),
                        operation_id: operationId,
                        param_id: parameterId,
                        fact_start: null,
                        fact_end: null,
                        skipped: true
                    };
                    
                    scheduleSave('operation', operationData);
                } else {
                    localStorage.removeItem(storageKey);
                    
                    // Автоматическое сохранение в базу данных
                    const operationData = {
                        timestamp: dateKey.getTime(),
                        operation_id: operationId,
                        param_id: parameterId,
                        fact_start: null,
                        fact_end: null,
                        skipped: false
                    };
                    
                    scheduleSave('operation', operationData);
                }
            }
            
            // Модифицированная функция для сохранения выбранных параметров
            function updateSelectedParams() {
                selectedParams = [];
                paramItems.forEach(item => {
                    if (item.checked) {
                        selectedParams.push(parseInt(item.id.split('-')[1]));
                    }
                });
                
                const storageKey = getSelectedParamsStorageKey(selectedDate);
                localStorage.setItem(storageKey, JSON.stringify(selectedParams));
                
                // Автоматическое сохранение в базу данных
                scheduleSave('setting', {
                    key: storageKey,
                    value: JSON.stringify(selectedParams)
                });
                
                updateSelectButtonText();
            }
            
            // Функция для начальной синхронизации всех данных
            async function syncAllDataToDatabase() {
                const operations = [];
                const violationReasons = [];
                const settings = [];
                
                // Собираем все данные из localStorage
                for (let i = 0; i < localStorage.length; i++) {
                    const key = localStorage.key(i);
                    const value = localStorage.getItem(key);
                    
                    if (key.startsWith('operation_')) {
                        const parts = key.split('_');
                        if (parts.length >= 5) {
                            const timestamp = parseInt(parts[1]);
                            const operationId = parseInt(parts[2]);
                            const paramId = parseInt(parts[3]);
                            const type = parts[4];
                            
                            let operation = operations.find(op => 
                                op.timestamp === timestamp && 
                                op.operation_id === operationId && 
                                op.param_id === paramId
                            );
                            
                            if (!operation) {
                                operation = {
                                    timestamp: timestamp,
                                    operation_id: operationId,
                                    param_id: paramId,
                                    fact_start: null,
                                    fact_end: null,
                                    skipped: false
                                };
                                operations.push(operation);
                            }
                            
                            if (type === 'start' && value) {
                                operation.fact_start = parseInt(value);
                            } else if (type === 'end' && value) {
                                operation.fact_end = parseInt(value);
                            } else if (type === 'skipped') {
                                operation.skipped = (value === 'true');
                            }
                        }
                    } else if (key.startsWith('violation_reason_')) {
                        const parts = key.split('_');
                        if (parts.length >= 5) {
                            violationReasons.push({
                                timestamp: parseInt(parts[2]),
                                operation_id: parseInt(parts[3]),
                                param_id: parseInt(parts[4]),
                                reason: value
                            });
                        }
                    } else if (key.startsWith('selected_params_')) {
                        settings.push({
                            key: key,
                            value: value
                        });
                    }
                }
                
                // Отправляем операции пакетно
                if (operations.length > 0) {
                    const result = await saveToDatabase({
                        type: 'batch_operations',
                        operations: operations
                    });
                    
                    if (result) {
                        console.log(`Initial sync: ${operations.length} operations synchronized`);
                    }
                }
                
                // Отправляем причины нарушений и настройки по одной
                for (const violation of violationReasons) {
                    await saveToDatabase({
                        type: 'violation_reason',
                        data: violation
                    });
                }
                
                for (const setting of settings) {
                    await saveToDatabase({
                        type: 'setting',
                        key: setting.key,
                        value: setting.value
                    });
                }
                
                console.log('Initial data synchronization completed');
            }
            
            // Индикатор статуса сохранения
            function createSaveStatusIndicator() {
                const indicator = document.createElement('div');
                indicator.id = 'save-status-indicator';
                indicator.style.cssText = `
                    position: fixed;
                    bottom: 10px;
                    right: 10px;
                    padding: 5px 10px;
                    border-radius: 15px;
                    font-size: 12px;
                    z-index: 10000;
                    transition: all 0.3s ease;
                    opacity: 0;
                `;
                
                document.body.appendChild(indicator);
                return indicator;
            }
            
            // Функция для показа статуса сохранения
            function showSaveStatus(message, isError = false) {
                const indicator = document.getElementById('save-status-indicator') || createSaveStatusIndicator();
                
                indicator.textContent = message;
                indicator.style.backgroundColor = isError ? '#e74c3c' : '#2ecc71';
                indicator.style.color = 'white';
                indicator.style.opacity = '1';
                
                setTimeout(() => {
                    indicator.style.opacity = '0';
                }, 2000);
            }
            
            // Модифицируем функцию scheduleSave для отображения статуса
            const originalScheduleSave = scheduleSave;
            scheduleSave = function(type, data) {
                showSaveStatus('Сохранение...');
                originalScheduleSave(type, data);
            };
            
            // Модифицируем функцию saveToDatabase для отображения статуса
            const originalSaveToDatabase = saveToDatabase;
            saveToDatabase = async function(data) {
                const result = await originalSaveToDatabase(data);
                
                if (result) {
                    showSaveStatus('Сохранено в БД');
                } else {
                    showSaveStatus('Ошибка сохранения', true);
                }
                
                return result;
            };
            
            // Обработка онлайн/офлайн статуса
            window.addEventListener('online', function() {
                console.log('Connection restored, processing save queue...');
                processSaveQueue();
                syncAllDataToDatabase();
            });
            
            window.addEventListener('offline', function() {
                console.log('Connection lost, saves will be queued');
            });
            
            // Сохранение при закрытии страницы
            window.addEventListener('beforeunload', function() {
                if (saveQueue.length > 0) {
                    // Пытаемся сохранить оставшиеся данные синхронно
                    const syncData = [...saveQueue];
                    
                    // Используем sendBeacon для асинхронной отправки при закрытии
                    syncData.forEach(data => {
                        const blob = new Blob([JSON.stringify(data)], {type: 'application/json'});
                        navigator.sendBeacon('save_to_db.php', blob);
                    });
                }
            });
            
            // Инициализация приложения
            function init() {
                initDate();
                loadSelectedParams();
                renderTable();
                updateDateTime();
                
                // Обновление времени каждую секунду
                setInterval(updateDateTime, 1000);
                
                // Обновление статусов каждые 30 секунд
                setInterval(updateStatuses, 30000);
                
                // Автоматическая синхронизация с базой данных через 3 секунды после загрузки
                setTimeout(() => {
                    syncAllDataToDatabase().then(() => {
                        console.log('Automatic database synchronization initialized');
                    });
                }, 3000);
                
                // Показываем уведомление о загрузке данных
                showNotification('Данные успешно загружены');
            }
            
            // Запуск приложения
            init();
        });
    
// --- Автоматическая фильтрация по выбранному поезду ---
document.addEventListener('DOMContentLoaded', () => {
    const select = document.getElementById('trainSelect');
    const table = document.getElementById('schedule-table');
    if (!table) return;
    const rows = table.querySelectorAll('tbody tr:not(#train-filter-row)');

    // Собираем уникальные названия поездов из первого столбца
    const trains = Array.from(rows)
        .map(row => row.querySelector('td:first-child')?.innerText.trim())
        .filter(name => name && name !== '')
        .filter((value, index, self) => self.indexOf(value) === index);

    trains.forEach(train => {
        const opt = document.createElement('option');
        opt.value = train;
        opt.textContent = train;
        select.appendChild(opt);
    });

    // Фильтрация при выборе
    select.addEventListener('change', () => {
        const selected = select.value;
        rows.forEach(row => {
            if (row.id === 'train-filter-row') return;
            const trainName = row.querySelector('td:first-child')?.innerText.trim();
            if (selected === 'all' || trainName === selected) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});

</script>

<!-- Подключение JavaScript для управления ролями -->
<script src="role_based_ui.js"></script>
</body>
</html>