import AuthenticatedLayout from '@/Layouts/AuthenticatedAdminLayout';
import { Head } from '@inertiajs/react';

export default function AdminInventory({ auth, items }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            items = {items}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Inventory Management</h2>}
        >
            <Head title="Inventory Management" />

            <div className="max-w-7xl mx-auto p-6 lg:p-8">
                {/* Table */}
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Item
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Merk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stok
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga Terkini ("todo:history harga")
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {/* Loop table rows */}
                            {
                                items.map((item, index) => {
                                return(
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {item.itemId}
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {item.itemName}
                                    </th>
                                    <td class="px-6 py-4">
                                        {item.brand}
                                    </td>
                                    <td class="px-6 py-4">
                                        {item.stock}
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp {item.currentPrice.toLocaleString('id-ID')}
                                    </td>
                                    <td class="px-6 py-4">
                                        {item.item_category.categoryName}
                                    </td>
                                    <td class="px-6 py-4">
                                        WorkInProgress
                                    </td>
                                </tr>
                                );
                            })}
                            
                            {/* end of Loop */}
                        </tbody>
                    </table>
                </div>
                {/* end of table */}
            </div>

        </AuthenticatedLayout>
    );
}
