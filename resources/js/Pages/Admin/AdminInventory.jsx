import AuthenticatedAdminLayout from "@/Layouts/AuthenticatedAdminLayout";
import { Head } from "@inertiajs/react";

export default function AdminInventory({ auth, items }) {
    return (
        <AuthenticatedAdminLayout
            user={auth.user}
            items={items}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Inventory Management
                </h2>
            }
        >
            <Head title="Inventory Management" />

            <div className="max-w-7xl mx-auto p-6 lg:p-8">
                {/* Table */}
                <div className="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table className="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" className="px-6 py-3">
                                    Id
                                </th>
                                <th scope="col" className="px-6 py-3">
                                    Nama Item
                                </th>
                                <th scope="col" className="px-6 py-3">
                                    Merk
                                </th>
                                <th scope="col" className="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" className="px-6 py-3">
                                    Stok
                                </th>
                                <th scope="col" className="px-6 py-3">
                                    Harga Terkini ("todo:history harga")
                                </th>
                                <th scope="col" className="px-6 py-3">
                                    Shelf
                                </th>
                                <th scope="col" className="px-6 py-3">
                                    Description
                                </th>
                                <th scope="col" className="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {/* Loop table rows */}
                            {items.map((item, index) => {
                                let formattedPrice =
                                    item.latestPrice.toLocaleString("id-ID");
                                return (
                                    <tr
                                        className="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                        key={index}
                                    >
                                        <td className="px-6 py-4">
                                            {item.itemId}
                                        </td>
                                        <th
                                            scope="row"
                                            className="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            {item.itemName}
                                        </th>
                                        <td className="px-6 py-4">
                                            {item.brand}
                                        </td>
                                        <td className="px-6 py-4">
                                            {item.item_category.categoryName}
                                        </td>
                                        <td className="px-6 py-4">
                                            {item.stock}
                                        </td>
                                        <td className="px-6 py-4">
                                            {"Rp " + formattedPrice}
                                        </td>
                                        <td className="px-6 py-4">
                                            {item.shelf}
                                        </td>
                                        <td className="px-6 py-4">
                                            {item.description}
                                        </td>
                                        <td className="px-6 py-4">
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
        </AuthenticatedAdminLayout>
    );
}
