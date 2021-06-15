<h2>Hello,</h2> <br><br>

<h5>ลูกค้าสนใจ ขอใบเสนอราคา ข้อมูลตามข้างล่างครับ</h5><br>

<p>Client's Name: {{ $quotation['name'] }}</p>
<p>Position/Company: {{ $quotation['company'] }}</p>
<p>Client's Email: {{ $quotation['email'] }}</p>
<p>เบอร์ติดต่อ: {{ $quotation['phone'] }}</p>
<p>สินค้าที่สนใจ: {{ implode(', ', $quotation['products']) }}</p>
<p>ข้อความ: {{ $quotation['message'] }}</p><br>

<h5>Thank You</h5>

