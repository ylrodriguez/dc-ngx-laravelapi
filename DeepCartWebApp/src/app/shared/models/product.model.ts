export interface Product{
    id?: string,
    name: string,
    slug?: string,
    brand?: string,
    description?: string,
    price: number,
    quantity: number,
    quantityPurchase?:number,
    totalPurchase?:number,
    category_id?: number,
    offerDiscount?: number,
    images?: string[],
    imgUrl? : string,
    isLoading?: object

}