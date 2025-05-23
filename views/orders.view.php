<?php require ('partials/head.php') ?>
<?php require ('partials/nav.php') ?>
<?php require ('partials/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php foreach ($customers as $customer) : ?>
        <li>     
            <a href="/PHP/order?customer_id=<?= $customer['customer_id'] ?>" class ="text-blue-500 hover:underline">
                <?= htmlspecialchars($customer['first_name']) ?>  
            </a>
        </li>
      <?php endforeach; ?>
      
      <p class=" mt-6">
        <a href="/PHP/orders/create" class="text-blue-500 hover:underline">Create orders</a>
      </p>
    </div>
  </main>
</div>


</body>
</html>