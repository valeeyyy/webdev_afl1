<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
* {
    margin: 0;
    box-sizing: border-box;
}
</style>

<body style="font-family: Arial, sans-serif;">
    <nav
        style="width: 100%; background-color: #f5f5f5; padding: 25px 40px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 8px rgba(0,0,0,0.15);">
        <h2 style="color: black;">Library Management</h2>
        <div>
            <a href="#" style="color: black; text-decoration: none; margin-right: 35px;">Members</a>
            <a href="#" style="color: black; text-decoration: none; margin-right: 35px;">Books</a>
            <a href="#" style="color: black; text-decoration: none;">Borrowings</a>
        </div>
    </nav>


    <div style="padding: 35px 40px;">
        <h2 style="margin-bottom: 20px;">List of Members</h2>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #212529; color: white; text-align: left;">
                    <th style="padding: 12px 15px;">No</th>
                    <th style="padding: 12px 15px;">NIM</th>
                    <th style="padding: 12px 15px;">Full Name</th>
                    <th style="padding: 12px 15px;">Email</th>
                    <th style="padding: 12px 15px;">Phone Number</th>
                    <th style="padding: 12px 15px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom: 1px solid #dee2e6;">
                    <td style="padding: 15px">1</td>
                    <td style="padding: 15px">1076012510035</td>
                    <td style="padding: 15px">Marsha Valerie</td>
                    <td style="padding: 15px">valerie@gmail.com</td>
                    <td style="padding: 15px">08123456789</td>
                    <td style="padding: 15px">
                        <button
                            style="background-color: #ffc107; color: #000; border: none; padding: 6px 12px; border-radius: 4px;">Update</button>
                        <button
                            style="background-color: #dc3545; color: #fff; border: none; padding: 6px 12px; border-radius: 4px; margin-left: 5px;">Delete</button>
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid #dee2e6;">
                    <td style="padding: 15px">2</td>
                    <td style="padding: 15px">1076012510029</td>
                    <td style="padding: 15px">Christa Caitlyn</td>
                    <td style="padding: 15px">christa@gmail.com</td>
                    <td style="padding: 15px">08198765432</td>
                    <td style="padding: 15px">
                        <button
                            style="background-color: #ffc107; color: #000; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;">Update</button>
                        <button
                            style="background-color: #dc3545; color: #fff; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer; margin-left: 5px;">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>