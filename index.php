<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>7Learn Exporter</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #0f172a;
            /* deep dark blue-gray */
            color: #e2e8f0;
            /* light gray */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main {
            background-color: #1e293b;
            /* slightly lighter dark */
            padding: 2rem 2.5rem;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 450px;
        }

        h1 {
            font-size: 1.8rem;
            color: #38bdf8;
            /* sky blue */
            text-align: center;
            margin-bottom: 1.5rem;
        }

        input,
        select,
        textarea {
            background-color: #334155;
            /* input bg */
            border: 1px solid #475569;
            color: #f1f5f9;
            border-radius: 6px;
            padding: 0.6rem 0.8rem;
            font-size: 1rem;
            margin-bottom: 1rem;
            width: 100%;
            box-sizing: border-box;
        }

        input::placeholder,
        textarea::placeholder {
            color: #94a3b8;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            background-color: #38bdf8;
            /* sky blue */
            color: #0f172a;
            font-weight: 600;
            border: none;
            padding: 0.8rem;
            border-radius: 6px;
            font-size: 1rem;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0ea5e9;
            /* darker blue */
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="main">
        <h1>PHP Exporter</h1>
        <form action="process.php" method="POST">
            <input type="text" name="title" placeholder="Title ....">
            <textarea name="content" placeholder="Description ...."></textarea>
            <select name="format">
                <option value="Text">Text File</option>
                <option value="Json">JSON File</option>
                <option value="Csv">CSV File</option>
            </select>
            <button type="submit">Export to File</button>
        </form>
    </div>
</body>

</html>