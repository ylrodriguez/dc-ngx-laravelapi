export interface Product{
    id?: string,
    name: string,
    slug?: string,
    brand?: string,
    description?: string,
    price: number,
    quantity: number,
    category_id?: number,
    offerDiscount?: number,
    images?: string[]

}